<?php

class User {

	private $_db,
			$_data,
			$_sessionName,
			$_cookieName,
			$_isLoggedIn;

	public function __construct($user = null) {
		$this->_db = DB::getInstance();

		$this->_sessionName = Config::get('session/session_name');
		$this->_cookieName = Config::get('remember/cookie_name');

		if(!$user) {
			if(Session::exists($this->_sessionName)) {
				$user = Session::get($this->_sessionName);
				// echo $user;
				if($this->find($user)) {
					$this->_isLoggedIn = true;
				} else {
					// process logout
				}
			}
		} else {
			$this->find($user);
		}
	}

	public function create($fields = array()) {
		if(!$this->_db->insert('users', $fields)) {
			throw new Exception('There was a problem creating this account.'.print_r($fields));
		}
	}

	public function update($fields = array(), $id = null) {

		if(!$id && $this->isLoggedIn()) {
			$id = $this->data()->id;
		}

		if(!$this->_db->update('users', $id, $fields)) {
			throw new Exception('There was a problem updating.');
		}
	}

	public function find($user = null) {
		if($user) {
			// if user had a numeric username this FAILS...
			$field = (is_numeric($user)) ? 'id' : 'username';
			$data = $this->_db->get('users', array($field, '=', $user));

			if($data->count()) {
				$this->_data = $data->first();
				return true;
			}
		}
		return false;
	}

	public function login($username = null, $password = null, $remember = false) {

		// print_r($this->_data);
    $temp = $this->data();
		// check if username has been defined
		if(!$username && !$password && $this->exists()) {
			Session::put($this->_sessionName, $temp->id);
		}else {
			$user = $this->find($username);

			if($user) {
				$temp = $this->data();
				if($temp->password === Hash::make($password, $temp->salt)) {
					Session::put($this->_sessionName,$temp->id);

					if($remember) {
						$hash = Hash::unique();
						$hashCheck = $this->_db;
						$hashCheck->get('users_session', array('user_id', '=',$temp->id));

						if(!$hashCheck->count()) {
							$this->_db->insert('users_session', array(
								'user_id' => $temp->id,
								'hash' => $hash
							));
						} else {
							$hash = $hashCheck->first()->hash;
						}

						Cookie::put($this->_cookieName, $hash, Config::get('remember/cookie_expiry'));
					}
					return true;
				}
			}
		}

		return false;
	}

	public function hasPermission($key) {
		$group = $this->_db;
		$temp = $this->data();
		$group->get('groups', array('id', '=', $temp->group));
		if($group->count()) {
			$permissions = json_decode($group->first()->permissions, true);
			if($permissions[$key] == true) {
				return true;
			}
		}
		return false;
	}

	public function exists() {
		return (!empty($this->_data)) ? true : false;
	}

	public function logout() {

		$this->_db->delete('user_session', array('user_id', '=', $temp->id));

		Session::delete($this->_sessionName);
		Cookie::delete($this->_cookieName);
	}

	public function data() {
		return $this->_data;
	}

	public function isLoggedIn() {
		return $this->_isLoggedIn;
	}

}

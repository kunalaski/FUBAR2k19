<?php

require_once 'core/init.php';

if(Input::exists()) {
	if(Token::check(Input::get('token'))) {

		$validate = new Validate();
		$validation = $validate->check($_POST, array(
			'username' => array('required' => true),
			'password' => array('required' => true)
		));

		if($validation->passed()) {
			// Login user
			$user = new User();
      //$remember = (!empty(Input::get('remember'))) ? true : false;
			$remember = (Input::get('remember') === 'on') ? true : false;
			$login = $user->login(Input::get('username'), Input::get('password'), $remember);

			if($login) {
				// echo 'Success';
				Redirect::to('index.php');
			} else {
				echo '<p>Sorry, logging in failed';
			}

		} else {
			foreach($validation->errors() as $error) {
				echo $error, '<br>';
			}
		}

	}
}
if(isset($_GET['msg']))
{
	echo "<script>
  alert('you have to login first');
</script>";
}


?>

<html>
<head>
<link rel="stylesheet" href="style/w3.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <div class="w3-modal-content  w3-animate-zoom" style="">

      <div class="w3-center"><br>
        <img src="images/imageuser.jpg" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
      </div>

      <form class="w3-container" action="" method="post" autocomplete="off">
        <div class="w3-section">
          <label><b>Username</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" name="username" required>
          <label><b>Password</b></label>
          <input class="w3-input w3-border" type="password" placeholder="Enter Password" name="password" required>
					<input type="hidden" name="token" value="<?php echo Token::generate(); ?>" />
					<button class="w3-button w3-block w3-light-blue w3-section w3-padding" type="submit">Login</button>

          <input class="w3-check w3-margin-top" type="checkbox" name = "remember"> Remember me
        </div>
      </form>

      <div class="w3-container w3-border-top w3-padding-16 ">
        <span class="w3-left w3-padding w3-hide-small"> <a href="register.php">Register</a></span>
        <span class="w3-right w3-padding w3-hide-small">Forgot <a href="register.php">password?</a></span>
      </div>

    </div>


  </body>
  </html>

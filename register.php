<?php
require_once 'core/init.php';

 //var_dump(Token::check(Input::get('token')));

if(Input::exists()) {
    if(Token::check(Input::get('token'))) {
    //  echo "string";

        $validate = new Validate();
        $validation = $validate->check($_POST, array(
            'username' => array(
                'required' => true,
                'min' => 2,
                'max' => 30,
                'unique' => 'users',
                'avail' => true
            ),
            'password' => array(
                'required' => true,
                'min' => 6
            ),
            'password_again' => array(
                'required' => true,
                'matches' => 'password'
            ),
            'name' => array(
                'required' => true,
                'min' => 2,
                'max' => 50
            )
        ));

        if($validation->passed()) {
            // echo 'Passed';
            $user = new User();

            $salt = Hash::salt(32);

            try {
                $user->create(array(
                    'username'	=> Input::get('username'),
                    'password'	=> Hash::make(Input::get('password'), $salt),
                    'salt'		=> $salt,
                    'name'		=> Input::get('name'),
                    'joined'	=> date('Y-m-d H:i:s'),
                    'groups'		=> 1,
                ));
                Session::flash('home', 'You have been registered and can now log in!');
                // header('Location: index.php');
                Redirect::to('index.php');
            } catch(Exception $e) {
                die($e->getMessage());
            }
        } else {
            foreach($validation->errors() as $error) {
                echo $error, '<br>';
            }
        }
    }

}

?>

<html>
<head>
<link rel="stylesheet" href="style/w3.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <div class="w3-modal-content w3-container w3-animate-zoom" style="">

      <div class="w3-center"><br>
        <img src="images/imageuser.jpg" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
      </div>

      <form class="w3-container" action="" method="post" autocomplete="off">
        <div class="w3-section">
          <div class="field">
        <label for="username">Username</label>
        <input  class="w3-input w3-border w3-margin-bottom" type="text" name="username" id="username" value="<?php echo escape(Input::get('username')); ?>" autocomplete="off" />
    </div>

    <div class="field">
        <label for="password">Choose a password</label>
        <input  class="w3-input w3-border w3-margin-bottom" type="password" id="password" name="password" />
    </div>

    <div class="field">
        <label for="password_again">Enter your password again</label>
        <input  class="w3-input w3-border w3-margin-bottom" type="password" id="password_again" name="password_again" />
    </div>

    <div class="field">
        <label for="name">Your Name</label>
        <input  class="w3-input w3-border w3-margin-bottom" type="text" name="name" id="name" value="<?php echo escape(Input::get('name')); ?>" />
    </div>

    <input type="hidden"  name="token" value="<?php echo Token::generate(); ?>" />
					<button class="w3-button w3-block w3-light-blue w3-section w3-padding" type="submit">Register</button>


        </div>
      </form>
      <div class="w3-container w3-border-top w3-padding-16 ">
        <span class="w3-left w3-padding w3-hide-small">Already a user? <a href="register.php">Log In</a></span>

      </div>

    </div>


  </body>
  </html>

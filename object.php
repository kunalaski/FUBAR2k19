<?php
require_once 'core/init.php';

$user = new User($username);

if ($user->isLoggedIn()) {

$data = $user->data();
  $mail = escape($data->username);
//constructive
 if(isset($_GET['cons']))
  {

  header("Location: Template/constructive/zipfile.php?mail=".$mail);
}

//architect
if(isset($_GET['dark']))
{
header("Location: Template/dark/zipfile.php?mail=".$mail);
}

if(isset($_GET['arch']))
{
header("Location: Template/architect/zipfile.php?mail=".$mail);
}

if(isset($_GET['cv']))
{
header("Location: Template/cv/zipfile.php?mail=".$mail);
}


//header("Location: http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");

//header('Location: ' . $_SERVER['HTTP_REFERER']);*/
}
 else {
   header('Location: login.php?msg');

}




 ?>

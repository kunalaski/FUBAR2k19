<?php
require_once 'core/init.php';

$user = new User();
$db = DB::getInstance();
if ($user->isLoggedIn()) {
  //$temp = $db->data();
  //$hashCheck = $db;
//  echo $hashCheck->get('users', array('user_id', '=',$temp->id));
$id = escape($user->data()->id);
echo $id;
$zip = $_GET['zip'];
$db->insert('template', array('user_id' => $id));
if (!$_GET) {
  echo "no";
}
else {
  $file = $_GET['file'];
  $zip = new ZipArchive();
  $zipp = $zip->open($file);
  echo '<a href ='.$zipp.'download='.$zipp.' >Download</a>';
$zip->close();
  /*$file = $zip_file;
  if(!$this->_db->insert('users', $fields)) {
    echo "failed";
  }*/

}
}
else {
  echo "fail";
}

 ?>

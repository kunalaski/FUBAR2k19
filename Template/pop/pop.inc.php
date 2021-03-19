<?php


if (isset($_POST['button'])) {

  $source = 'index.html';
  $dest = '../pop1/home.html';
  if (!copy($source, $dest)) {
    echo "done";
  }
  else {
      echo "File has been copied!";
  }

}
 ?>

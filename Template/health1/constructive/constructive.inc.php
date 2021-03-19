<?php
session_start();
if (isset($_POST['button'])) {

  $source = 'index.html';
  $dest = 'home.html';
  if (!copy($source, $dest)) {
    echo "<a href='index.html'>done</a>";
  }
  else {
      echo "File has been copied!";
  }


  $data = file($dest); // reads an array of lines
  //Company Name
function replace_a_line($data) {
   if (stristr($data, 'rip1')) {
     return $_POST['CmpNm'];
   }
   return $data;
}
$data = array_map('replace_a_line',$data);
file_put_contents($dest, implode('', $data));

//Company description
$data = file($dest); // reads an array of lines
function replace_a_line1($data) {
   if (stristr($data, 'rip2')) {
     return $_POST['desc'];
   }
   return $data;
}
$data = array_map('replace_a_line1',$data);
file_put_contents($dest, implode('', $data));

//Feature1
$data = file($dest);
function replace_a_line2($data) {
   if (stristr($data, 'rip3')) {
     return $_POST['feature1'];
   }
   return $data;
}
$data = array_map('replace_a_line2',$data);
file_put_contents($dest, implode('', $data));

//Feature1 description
$data = file($dest);
function replace_a_line3($data) {
   if (stristr($data, 'desc3')) {
     return $_POST['desc1'];
   }
   return $data;
}
$data = array_map('replace_a_line3',$data);
file_put_contents($dest, implode('', $data));

//Feature2
$data = file($dest);
function replace_a_line4($data) {
   if (stristr($data, 'rip4')) {
     return $_POST['feature2'];
   }
   return $data;
}
$data = array_map('replace_a_line4',$data);
file_put_contents($dest, implode('', $data));

//Feature2 description
$data = file($dest);
function replace_a_line5($data) {
   if (stristr($data, 'desc4')) {
     return $_POST['desc2'];
   }
   return $data;
}
$data = array_map('replace_a_line5',$data);
file_put_contents($dest, implode('', $data));

//Feature3
$data = file($dest);
function replace_a_line6($data) {
   if (stristr($data, 'rip5')) {
     return $_POST['feature3'];
   }
   return $data;
}
$data = array_map('replace_a_line6',$data);
file_put_contents($dest, implode('', $data));

//Feature3 description
$data = file($dest);
function replace_a_line7($data) {
   if (stristr($data, 'desc5')) {
     return $_POST['desc3'];
   }
   return $data;
}
$data = array_map('replace_a_line7',$data);
file_put_contents($dest, implode('', $data));

//Feature4
$data = file($dest);
function replace_a_line8($data) {
   if (stristr($data, 'rip6')) {
     return $_POST['feature4'];
   }
   return $data;
}
$data = array_map('replace_a_line8',$data);
file_put_contents($dest, implode('', $data));

//Feature4 description
$data = file($dest);
function replace_a_line9($data) {
   if (stristr($data, 'desc6')) {
     return $_POST['desc4'];
   }
   return $data;
}
$data = array_map('replace_a_line9',$data);
file_put_contents($dest, implode('', $data));

//Email id
$data = file($dest);
function replace_a_line0($data) {
   if (stristr($data, 'rip7')) {
     return $_POST['Email'];
   }
   return $data;
}
$data = array_map('replace_a_line0',$data);
file_put_contents($dest, implode('', $data));

//Telephone no
$data = file($dest);
function replace_a_line11($data) {
   if (stristr($data, 'rip8')) {
     return $_POST['TeleNo'];
   }
   return $data;
}
$data = array_map('replace_a_line11',$data);
file_put_contents($dest, implode('', $data));

//Address
$data = file($dest);
function replace_a_line22($data) {
   if (stristr($data, 'rip9')) {
     return $_POST['add'];
   }
   return $data;
}
$data = array_map('replace_a_line22',$data);
file_put_contents($dest, implode('', $data));

//company id
$data = file($dest);
function replace_a_line33($data) {
   if (stristr($data, 'rip10')) {
     return $_POST['copy'];
   }
   return $data;
}
$data = array_map('replace_a_line33',$data);
file_put_contents($dest, implode('', $data));

  header("Location: ../../SendMail.php");

}
?>

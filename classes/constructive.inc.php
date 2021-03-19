<?php

class CopyPaste extends Exchange
{
   function CoPy()
 {
   $source = 'index.html';
   $dest = '../constructive1/home.html';
   if (!copy($source, $dest)) {
      echo "failed to copy $source...\n";
   }else {
      echo "copied $source into $dest\n";
   }

}
}


/**
 *
 */
class Exchange
{

      function Exchange1($str, $postnm)
      {
         $dest = '../constructive1/home.html';
         $oldMessage = $str;

        $deletedFormat = $postnm;

 //read the entire string
 $str=file_get_contents($dest);

 //replace something in the file string - this is a VERY simple example
 $str=str_replace("$oldMessage", "$deletedFormat",$str);

 //write the entire string
 file_put_contents($dest, $str);
    }
}


/**
 *
 */




/*
//Company description
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

if(isset($_FILES['file1'])){
   $errors= array();
   $file_name = $_FILES['file1']['name'];
   $file_size =$_FILES['file1']['size'];
   $file_tmp =$_FILES['file1']['tmp_name'];
   $file_type=$_FILES['file1']['type'];
   $file_ext=strtolower(end(explode('.',$_FILES['file1']['name'])));

   $expensions= array("jpeg","jpg","png");

   if(in_array($file_ext,$expensions)=== false){
      $errors[]="extension not allowed, please choose a JPEG or PNG file.";
   }

   if($file_size > 2097152){
      $errors[]='File size must be excately 2 MB';
   }

   if(empty($errors)==true){
      move_uploaded_file($file_tmp,"../constructive1/img/".$file_name);
      rename('../constructive1/img/'.$file_name,'../constructive1/img/kazu.'.$file_ext);
      echo "Success";
   }else{
      print_r($errors);
   }
}

//header("Location: zipfile.php");



?>*/

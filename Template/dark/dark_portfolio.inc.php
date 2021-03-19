<?php
//header('Location: ../../object.php');
file_put_contents("../dark1/home.html", "");
class CopyPaste extends Exchange
{
   function CoPy()
 {
   $source = 'index.html';
   $dest = '../dark1/home.html';
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
         $dest = '../dark1/home.html';
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

if (isset($_POST['button'])) {





$str1='rip1';
$str11=$_POST['name1'];
$cp1=new CopyPaste;
$cp1->CoPy();
$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$ste11);


$str1='rip2';
$str11=$_POST['prof1'];
$cp1=new CopyPaste;
$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$ste11);

$str1='rip3';
$str11=$_POST['name2'];
$cp1=new CopyPaste;
$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$ste11);

$str1='rip4';
$str11=$_POST['detail1'];
$cp1=new CopyPaste;
$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$ste11);

$str1='rip5';
$str11=$_POST['skill1'];
$cp1=new CopyPaste;
$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$ste11);

$str1='rip6';
$str11=$_POST['skill2'];
$cp1=new CopyPaste;
$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$ste11);

$str1='rip7';
$str11=$_POST['skill3'];
$cp1=new CopyPaste;
$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$ste11);

$str1='rip8';
$str11=$_POST['per1'];
$cp1=new CopyPaste;
$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$ste11);

$str1='rip9';
$str11=$_POST['post1'];
$cp1=new CopyPaste;
$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$ste11);

$str1='ripa';
$str11=$_POST['per2'];
$cp1=new CopyPaste;
$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$ste11);

$str1='ripb';
$str11=$_POST['post2'];
$cp1=new CopyPaste;
$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$ste11);


$str1='ripc';
$str11=$_POST['add1'];
$cp1=new CopyPaste;
$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$ste11);

$str1='ripd';
$str11=$_POST['tel1'];
$cp1=new CopyPaste;
$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$ste11);


$str1='ripe';
$str11=$_POST['mail1'];
$cp1=new CopyPaste;
$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$ste11);


$str1='rip?';
$str11=$_POST['title'];
$cp1=new CopyPaste;
$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$ste11);


if(isset($_POST['font']))
{
$font = $_POST['font'];
switch ($font) {
  case 'Rubix':
    // code...
    $str1="<style> body{font-family: 'Arial';}</style>";
    $str11="<style> body{font-family: 'Rubik';}</style>";
    $cp1=new CopyPaste;
    $cp1->Exchange1($str1,$str11);
    unset($cp1,$str1,$ste11);


    break;
    case 'Abel':
      // code...
      $str1="<style> body{font-family: 'Arial';}</style>";
      $str11="<style> body{font-family: 'Abel';}</style>";
      $cp1=new CopyPaste;
      $cp1->Exchange1($str1,$str11);
      unset($cp1,$str1,$ste11);

      break;
      case 'Open Sans':
        // code...
        $str1="<style> body{font-family: 'Arial';}</style>";
        $str11="<style> body{font-family: 'Open Sans';}</style>";
        $cp1=new CopyPaste;
        $cp1->Exchange1($str1,$str11);
        unset($cp1,$str1,$ste11);

        break;
        case 'Roboto':
          // code...
          $str1="<style> body{font-family: 'Arial';}</style>";
          $str11="<style> body{font-family: 'Roboto';}</style>";
          $cp1=new CopyPaste;
          $cp1->Exchange1($str1,$str11);
          unset($cp1,$str1,$ste11);

          break;

  default:
    // code...
    $str1="<style> body{font-family: 'Arial';}</style>";
    $str11="<style> body{font-family: 'Arial';}</style>";
    $cp1=new CopyPaste;
    $cp1->Exchange1($str1,$str11);
    unset($cp1,$str1,$ste11);

    break;
}


}

//image upload

$uploadOk = 1;

if(isset($_FILES['file1'])){
echo "string";
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

if($file_size > 5097152){
$errors[]='File size must be excately 2 MB';
}

if(empty($errors)==true){
move_uploaded_file($file_tmp,"../dark1/dark portfolio_files/".$file_name);
rename('../dark1/dark portfolio_files/'.$file_name,'../dark1/dark portfolio_files/file1.jpg');
echo "Success";
}else{
print_r($errors);
}
}


if(isset($_FILES['file2'])){
echo "string";
$errors= array();
$file_name = $_FILES['file2']['name'];
$file_size =$_FILES['file2']['size'];
$file_tmp =$_FILES['file2']['tmp_name'];
$file_type=$_FILES['file2']['type'];
$file_ext=strtolower(end(explode('.',$_FILES['file2']['name'])));

$expensions= array("jpeg","jpg","png");

if(in_array($file_ext,$expensions)=== false){
$errors[]="extension not allowed, please choose a JPEG or PNG file.";
}

if($file_size > 5097152){
$errors[]='File size must be excately 2 MB';
}

if(empty($errors)==true){
move_uploaded_file($file_tmp,"../dark1/dark portfolio_files/".$file_name);
rename('../dark1/dark portfolio_files/'.$file_name,'../dark1/dark portfolio_files/file2.jpg');
echo "Success";
}else{
print_r($errors);
}
}



if(isset($_FILES['file3'])){
echo "string";
$errors= array();
$file_name = $_FILES['file3']['name'];
$file_size =$_FILES['file3']['size'];
$file_tmp =$_FILES['file3']['tmp_name'];
$file_type=$_FILES['file3']['type'];
$file_ext=strtolower(end(explode('.',$_FILES['file3']['name'])));

$expensions= array("jpeg","jpg","png");

if(in_array($file_ext,$expensions)=== false){
$errors[]="extension not allowed, please choose a JPEG or PNG file.";
}

if($file_size > 5097152){
$errors[]='File size must be excately 2 MB';
}

if(empty($errors)==true){
move_uploaded_file($file_tmp,"../dark1/dark portfolio_files/".$file_name);
rename('../dark1/dark portfolio_files/'.$file_name,'../dark1/dark portfolio_files/file3.jpg');
echo "Success";
}else{
print_r($errors);
}
}



if(isset($_FILES['file4'])){
echo "string";
$errors= array();
$file_name = $_FILES['file4']['name'];
$file_size =$_FILES['file4']['size'];
$file_tmp =$_FILES['file4']['tmp_name'];
$file_type=$_FILES['file4']['type'];
$file_ext=strtolower(end(explode('.',$_FILES['file4']['name'])));

$expensions= array("jpeg","jpg","png");

if(in_array($file_ext,$expensions)=== false){
$errors[]="extension not allowed, please choose a JPEG or PNG file.";
}

if($file_size > 5097152){
$errors[]='File size must be excately 2 MB';
}

if(empty($errors)==true){
move_uploaded_file($file_tmp,"../dark1/dark portfolio_files/".$file_name);
rename('../dark1/dark portfolio_files/'.$file_name,'../dark1/dark portfolio_files/file4.jpg');
echo "Success";
}else{
print_r($errors);
}
}


if(isset($_FILES['file5'])){
echo "string";
$errors= array();
$file_name = $_FILES['file5']['name'];
$file_size =$_FILES['file5']['size'];
$file_tmp =$_FILES['file5']['tmp_name'];
$file_type=$_FILES['file5']['type'];
$file_ext=strtolower(end(explode('.',$_FILES['file5']['name'])));

$expensions= array("jpeg","jpg","png");

if(in_array($file_ext,$expensions)=== false){
$errors[]="extension not allowed, please choose a JPEG or PNG file.";
}

if($file_size > 5097152){
$errors[]='File size must be excately 2 MB';
}

if(empty($errors)==true){
move_uploaded_file($file_tmp,"../dark1/dark portfolio_files/".$file_name);
rename('../dark1/dark portfolio_files/'.$file_name,'../dark1/dark portfolio_files/file5.jpg');
echo "Success";
}else{
print_r($errors);
}
}


if(isset($_FILES['file6'])){
echo "string";
$errors= array();
$file_name = $_FILES['file6']['name'];
$file_size =$_FILES['file6']['size'];
$file_tmp =$_FILES['file6']['tmp_name'];
$file_type=$_FILES['file6']['type'];
$file_ext=strtolower(end(explode('.',$_FILES['file6']['name'])));

$expensions= array("jpeg","jpg","png");

if(in_array($file_ext,$expensions)=== false){
$errors[]="extension not allowed, please choose a JPEG or PNG file.";
}

if($file_size > 5097152){
$errors[]='File size must be excately 2 MB';
}

if(empty($errors)==true){
move_uploaded_file($file_tmp,"../dark1/dark portfolio_files/".$file_name);
rename('../dark1/dark portfolio_files/'.$file_name,'../dark1/dark portfolio_files/file6.jpg');
echo "Success";
}else{
print_r($errors);
}
}



if(isset($_FILES['file7'])){
echo "string";
$errors= array();
$file_name = $_FILES['file7']['name'];
$file_size =$_FILES['file7']['size'];
$file_tmp =$_FILES['file7']['tmp_name'];
$file_type=$_FILES['file7']['type'];
$file_ext=strtolower(end(explode('.',$_FILES['file7']['name'])));

$expensions= array("jpeg","jpg","png");

if(in_array($file_ext,$expensions)=== false){
$errors[]="extension not allowed, please choose a JPEG or PNG file.";
}

if($file_size > 5097152){
$errors[]='File size must be excately 2 MB';
}

if(empty($errors)==true){
move_uploaded_file($file_tmp,"../dark1/dark portfolio_files/".$file_name);
rename('../dark1/dark portfolio_files/'.$file_name,'../dark1/dark portfolio_files/file7.jpg');
echo "Success";
}else{
print_r($errors);
}
}


if(isset($_FILES['file8'])){
echo "string";
$errors= array();
$file_name = $_FILES['file8']['name'];
$file_size =$_FILES['file8']['size'];
$file_tmp =$_FILES['file8']['tmp_name'];
$file_type=$_FILES['file8']['type'];
$file_ext=strtolower(end(explode('.',$_FILES['file8']['name'])));

$expensions= array("jpeg","jpg","png");

if(in_array($file_ext,$expensions)=== false){
$errors[]="extension not allowed, please choose a JPEG or PNG file.";
}

if($file_size > 5097152){
$errors[]='File size must be excately 2 MB';
}

if(empty($errors)==true){
move_uploaded_file($file_tmp,"../dark1/dark portfolio_files/".$file_name);
rename('../dark1/dark portfolio_files/'.$file_name,'../dark1/dark portfolio_files/file8.jpg');
echo "Success";
}else{
print_r($errors);
}
}



header('Location: headerfooter.php');
}



?>

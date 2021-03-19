<?php
//header('Location: ../../object.php');
file_put_contents("../constructive1/home.html", "");
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

  //header('Location: ../../object.php');
if (isset($_POST['button'])) {


//company name
$str1='rip1';
$str11= $_POST['CmpNm'];
$cp1 = new CopyPaste;
$cp1->CoPy();
$cp1->Exchange1($str1, $str11);
unset($cp1, $str1, $str11);

//company description
$str1='rip2';
$str11=$_POST['desc'];
$cp2 = new CopyPaste;
$cp2->Exchange1($str1, $str11);
unset($cp1, $str1, $str11);

//Feature1
$str1='rip3';
$str11=$_POST['feature1'];
$cp1 = new CopyPaste;
$cp1->Exchange1($str1, $str11);
unset($cp1, $str1, $str11);

//Feature1 description
$str1='desc3';
$str11=$_POST['desc1'];
$cp1 = new CopyPaste;
$cp1->Exchange1($str1, $str11);
unset($cp1, $str1, $str11);

//Feature2
$str1='rip4';
$str11=$_POST['feature2'];
$cp1 = new CopyPaste;
$cp1->Exchange1($str1, $str11);
unset($cp1, $str1, $str11);

//Feature2 description
$str1='desc4';
$str11=$_POST['desc2'];
$cp1 = new CopyPaste;
$cp1->Exchange1($str1, $str11);
unset($cp1, $str1, $str11);

//Feature3
$str1='rip5';
$str11=$_POST['feature3'];
$cp1 = new CopyPaste;
$cp1->Exchange1($str1, $str11);
unset($cp1, $str1, $str11);

//Feature3 description
$str1='desc5';
$str11=$_POST['desc3'];
$cp1 = new CopyPaste;
$cp1->Exchange1($str1, $str11);
unset($cp1, $str1, $str11);

//Feature4
$str1='rip6';
$str11=$_POST['feature4'];
$cp1 = new CopyPaste;
$cp1->Exchange1($str1, $str11);
unset($cp1, $str1, $str11);

//Feature4 description
$str1='desc6';
$str11=$_POST['desc4'];
$cp1 = new CopyPaste;
$cp1->Exchange1($str1, $str11);
unset($cp1, $str1, $str11);

//Email id
$str1='rip7';
$str11=$_POST['Email'];
$cp1 = new CopyPaste;
$cp1->Exchange1($str1, $str11);
unset($cp1, $str1, $str11);

//Telephone no
$str1='rip8';
$str11=$_POST['TeleNo'];
$cp1 = new CopyPaste;
$cp1->Exchange1($str1, $str11);
unset($cp1, $str1, $str11);

//Address
$str1='rip9';
$str11=$_POST['add'];
$cp1 = new CopyPaste;
$cp1->Exchange1($str1, $str11);
unset($cp1, $str1, $str11);

//company id
$str1='ripa';
$str11=$_POST['copy'];
$cp1 = new CopyPaste;
$cp1->Exchange1($str1, $str11);
unset($cp1, $str1, $str11);

$str1='dip9';
$str11=$_POST['title'];
$cp1 = new CopyPaste;
$cp1->Exchange1($str1, $str11);
unset($cp1, $str1, $str11);


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






//file upload


$uploadOk = 1;
if(isset($_FILES['file1'])){
  echo "done";
$errors= array();
$file_name = $_FILES['file1']['name'];
$file_size =$_FILES['file1']['size'];
$file_tmp =$_FILES['file1']['tmp_name'];
$file_type=$_FILES['file1']['type'];
$file_ext=strtolower(end(explode('.', $_FILES['file1']['name'])));

$expensions= array("jpeg","jpg","png");

if(in_array($file_ext,$expensions)=== false){
$errors[]="extension not allowed, please choose a JPEG or PNG file.";
}

if($file_size > 5097152){
$errors[]='File size must be excately 2 MB';
}

if(empty($errors)==true){

  echo "string";
move_uploaded_file($file_tmp,"../constructive1/img/".$file_name);
rename('../constructive1/img/'.$file_name,'../constructive1/img/file1.jpg');
echo "Success";
}else{
print_r($errors);
}
}

$uploadOk = 1;
if(isset($_FILES['file2'])){
  echo "done";
$errors= array();
$file_name = $_FILES['file2']['name'];
$file_size =$_FILES['file2']['size'];
$file_tmp =$_FILES['file2']['tmp_name'];
$file_type=$_FILES['file2']['type'];
$file_ext=strtolower(end(explode('.', $_FILES['file2']['name'])));

$expensions= array("jpeg","jpg","png");

if(in_array($file_ext,$expensions)=== false){
$errors[]="extension not allowed, please choose a JPEG or PNG file.";
}

if($file_size > 5097152){
$errors[]='File size must be excately 2 MB';
}

if(empty($errors)==true){

  echo "string";
move_uploaded_file($file_tmp,"../constructive1/img/".$file_name);
rename('../constructive1/img/'.$file_name,'../constructive1/img/file2.jpg');
echo "Success";
}else{
print_r($errors);
}
}

$uploadOk = 1;
if(isset($_FILES['file3'])){
  echo "done";
$errors= array();
$file_name = $_FILES['file3']['name'];
$file_size =$_FILES['file3']['size'];
$file_tmp =$_FILES['file3']['tmp_name'];
$file_type=$_FILES['file3']['type'];
$file_ext=strtolower(end(explode('.', $_FILES['file3']['name'])));

$expensions= array("jpeg","jpg","png");

if(in_array($file_ext,$expensions)=== false){
$errors[]="extension not allowed, please choose a JPEG or PNG file.";
}

if($file_size > 5097152){
$errors[]='File size must be excately 2 MB';
}

if(empty($errors)==true){

  echo "string";
move_uploaded_file($file_tmp,"../constructive1/img/".$file_name);
rename('../constructive1/img/'.$file_name,'../constructive1/img/file3.jpg');
echo "Success";
}else{
print_r($errors);
}
}

$uploadOk = 1;
if(isset($_FILES['file4'])){
  echo "done";
$errors= array();
$file_name = $_FILES['file4']['name'];
$file_size =$_FILES['file4']['size'];
$file_tmp =$_FILES['file4']['tmp_name'];
$file_type=$_FILES['file4']['type'];
$file_ext=strtolower(end(explode('.', $_FILES['file4']['name'])));

$expensions= array("jpeg","jpg","png");

if(in_array($file_ext,$expensions)=== false){
$errors[]="extension not allowed, please choose a JPEG or PNG file.";
}

if($file_size > 5097152){
$errors[]='File size must be excately 2 MB';
}

if(empty($errors)==true){

  echo "string";
move_uploaded_file($file_tmp,"../constructive1/img/".$file_name);
rename('../constructive1/img/'.$file_name,'../constructive1/img/file4.jpg');
echo "Success";
}else{
print_r($errors);
}
}

$uploadOk = 1;
if(isset($_FILES['file5'])){
  echo "done";
$errors= array();
$file_name = $_FILES['file5']['name'];
$file_size =$_FILES['file5']['size'];
$file_tmp =$_FILES['file5']['tmp_name'];
$file_type=$_FILES['file5']['type'];
$file_ext=strtolower(end(explode('.', $_FILES['file5']['name'])));

$expensions= array("jpeg","jpg","png");

if(in_array($file_ext,$expensions)=== false){
$errors[]="extension not allowed, please choose a JPEG or PNG file.";
}

if($file_size > 5097152){
$errors[]='File size must be excately 2 MB';
}

if(empty($errors)==true){

  echo "string";
move_uploaded_file($file_tmp,"../constructive1/img/".$file_name);
rename('../constructive1/img/'.$file_name,'../constructive1/img/file5.jpg');
echo "Success";
}else{
print_r($errors);
}
}


if(isset($_FILES['file9'])){
  echo "done";
$errors= array();
$file_name = $_FILES['file9']['name'];
$file_size =$_FILES['file9']['size'];
$file_tmp =$_FILES['file9']['tmp_name'];
$file_type=$_FILES['file9']['type'];
$file_ext=strtolower(end(explode('.', $_FILES['file9']['name'])));

$expensions= array("jpeg","jpg","png");

if(in_array($file_ext,$expensions)=== false){
$errors[]="extension not allowed, please choose a JPEG or PNG file.";
}

if($file_size > 5097152){
$errors[]='File size must be excately 2 MB';
}

if(empty($errors)==true){

  echo "string";
move_uploaded_file($file_tmp,"../constructive1/img/".$file_name);
rename('../constructive1/img/'.$file_name,'../constructive1/img/file9.jpg');
echo "Success";
}else{
print_r($errors);
}
}


if(isset($_FILES['file8'])){
  echo "done";
$errors= array();
$file_name = $_FILES['file8']['name'];
$file_size =$_FILES['file8']['size'];
$file_tmp =$_FILES['file8']['tmp_name'];
$file_type=$_FILES['file8']['type'];
$file_ext=strtolower(end(explode('.', $_FILES['file8']['name'])));

$expensions= array("jpeg","jpg","png");

if(in_array($file_ext,$expensions)=== false){
$errors[]="extension not allowed, please choose a JPEG or PNG file.";
}

if($file_size > 5097152){
$errors[]='File size must be excately 2 MB';
}

if(empty($errors)==true){

  echo "string";
move_uploaded_file($file_tmp,"../constructive1/img/".$file_name);
rename('../constructive1/img/'.$file_name,'../constructive1/img/file8.jpg');
echo "Success";
}else{
print_r($errors);
}
}

if(isset($_FILES['file7'])){
  echo "done";
$errors= array();
$file_name = $_FILES['file7']['name'];
$file_size =$_FILES['file7']['size'];
$file_tmp =$_FILES['file7']['tmp_name'];
$file_type=$_FILES['file7']['type'];
$file_ext=strtolower(end(explode('.', $_FILES['file7']['name'])));

$expensions= array("jpeg","jpg","png");

if(in_array($file_ext,$expensions)=== false){
$errors[]="extension not allowed, please choose a JPEG or PNG file.";
}

if($file_size > 5097152){
$errors[]='File size must be excately 2 MB';
}

if(empty($errors)==true){

  echo "string";
move_uploaded_file($file_tmp,"../constructive1/img/".$file_name);
rename('../constructive1/img/'.$file_name,'../constructive1/img/file7.jpg');
echo "Success";
}else{
print_r($errors);
}
}

if(isset($_FILES['file6'])){
  echo "done";
$errors= array();
$file_name = $_FILES['file6']['name'];
$file_size =$_FILES['file6']['size'];
$file_tmp =$_FILES['file6']['tmp_name'];
$file_type=$_FILES['file6']['type'];
$file_ext=strtolower(end(explode('.', $_FILES['file6']['name'])));

$expensions= array("jpeg","jpg","png");

if(in_array($file_ext,$expensions)=== false){
$errors[]="extension not allowed, please choose a JPEG or PNG file.";
}

if($file_size > 5097152){
$errors[]='File size must be excately 2 MB';
}

if(empty($errors)==true){

  echo "string";
move_uploaded_file($file_tmp,"../constructive1/img/".$file_name);
rename('../constructive1/img/'.$file_name,'../constructive1/img/file6.jpg');
echo "Success";
}else{
print_r($errors);
}
}


header('Location: headerfooter.php');
//header('Location: ../zipfile.php/home.html');
}

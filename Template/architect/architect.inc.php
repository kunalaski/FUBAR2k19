<?php
file_put_contents("../architect1/home.html", "");

//header('Location: ../../object.php');
class CopyPaste extends Exchange
{
   function CoPy()
 {
   $source = 'index.html';
   $dest = '../architect1/home.html';
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
         $dest = '../architect1/home.html';
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
  // code...

$str1='rip1';
$str11=$_POST['Cpname'];
$cp1=new CopyPaste;
$cp1->CoPy();
$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$str11);

$str1='rip2';
$str11=$_POST['img1'];
$cp1=new CopyPaste;

$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$str11);

$str1='rip3';
$str11=$_POST['img2'];
$cp1=new CopyPaste;

$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$str11);

$str1='rip4';
$str11=$_POST['img3'];
$cp1=new CopyPaste;

$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$str11);

$str1='rip5';
$str11=$_POST['img4'];
$cp1=new CopyPaste;

$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$str11);

$str1='rip6';
$str11=$_POST['img5'];
$cp1=new CopyPaste;

$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$str11);

$str1='rip7';
$str11=$_POST['img6'];
$cp1=new CopyPaste;

$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$str11);

$str1='rip8';
$str11=$_POST['img7'];
$cp1=new CopyPaste;

$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$str11);

$str1='rip9';
$str11=$_POST['img8'];
$cp1=new CopyPaste;

$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$str11);

/*$str1='ripa';
$str11=$_POST['about1'];
$cp1=new CopyPaste;

$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$str11);*/

$str1='ripb';
$str11=$_POST['about1'];
$cp1=new CopyPaste;

$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$str11);

$str1='ripc';
$str11=$_POST['architect1'];
$cp1=new CopyPaste;

$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$str11);


$str1='ripd';
$str11=$_POST['arpost1'];
$cp1=new CopyPaste;

$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$str11);



$str1='ripe';
$str11=$_POST['about2'];
$cp1=new CopyPaste;

$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$str11);



$str1='ripf';
$str11=$_POST['architect2'];
$cp1=new CopyPaste;
$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$str11);



$str1='ripg';
$str11=$_POST['arpost2'];
$cp1=new CopyPaste;
$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$str11);


$str1='riph';
$str11=$_POST['about3'];
$cp1=new CopyPaste;
$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$str11);


$str1='ripi';
$str11=$_POST['architect3'];
$cp1=new CopyPaste;
$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$str11);


$str1='ripj';
$str11=$_POST['arpost3'];
$cp1=new CopyPaste;
$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$str11);


$str1='ripk';
$str11=$_POST['about4'];
$cp1=new CopyPaste;
$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$str11);


$str1='ripl';
$str11=$_POST['architect4'];
$cp1=new CopyPaste;
$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$str11);


$str1='ripm';
$str11=$_POST['arpost4'];
$cp1=new CopyPaste;
$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$str11);


$str1='ripn';
$str11=$_POST['about5'];
$cp1=new CopyPaste;
$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$str11);


$str1='ripo';
$str11=$_POST['email1'];
$cp1=new CopyPaste;
$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$str11);

$str1='ripp';
$str11=$_POST['telno1'];
$cp1=new CopyPaste;
$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$str11);

$str1='dip9';
$str11=$_POST['title'];
$cp1=new CopyPaste;
$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$str11);



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
move_uploaded_file($file_tmp,"../architect1/architect_files/".$file_name);
rename('../architect1/architect_files/'.$file_name,'../architect1/architect_files/file1.jpg');
echo "Success";
}else{
print_r($errors);
}
}


if(isset($_FILES['file2'])){
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
move_uploaded_file($file_tmp,"../architect1/architect_files/".$file_name);
rename('../architect1/architect_files/'.$file_name,'../architect1/architect_files/file2.jpg');
echo "Success";
}else{
print_r($errors);
}
}


if(isset($_FILES['file3'])){
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
move_uploaded_file($file_tmp,"../architect1/architect_files/".$file_name);
rename('../architect1/architect_files/'.$file_name,'../architect1/architect_files/file3.jpg');
echo "Success";
}else{
print_r($errors);
}
}



if(isset($_FILES['file4'])){
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
move_uploaded_file($file_tmp,"../architect1/architect_files/".$file_name);
rename('../architect1/architect_files/'.$file_name,'../architect1/architect_files/file4.jpg');
echo "Success";
}else{
print_r($errors);
}
}


if(isset($_FILES['file5'])){
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
move_uploaded_file($file_tmp,"../architect1/architect_files/".$file_name);
rename('../architect1/architect_files/'.$file_name,'../architect1/architect_files/file5.jpg');
echo "Success";
}else{
print_r($errors);
}
}


if(isset($_FILES['file6'])){
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
move_uploaded_file($file_tmp,"../architect1/architect_files/".$file_name);
rename('../architect1/architect_files/'.$file_name,'../architect1/architect_files/file6.jpg');
echo "Success";
}else{
print_r($errors);
}
}


if(isset($_FILES['file7'])){
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
move_uploaded_file($file_tmp,"../architect1/architect_files/".$file_name);
rename('../architect1/architect_files/'.$file_name,'../architect1/architect_files/file7.jpg');
echo "Success";
}else{
print_r($errors);
}
}


if(isset($_FILES['file8'])){
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
move_uploaded_file($file_tmp,"../architect1/architect_files/".$file_name);
rename('../architect1/architect_files/'.$file_name,'../architect1/architect_files/file8.jpg');
echo "Success";
}else{
print_r($errors);
}
}


if(isset($_FILES['file9'])){
$errors= array();
$file_name = $_FILES['file9']['name'];
$file_size =$_FILES['file9']['size'];
$file_tmp =$_FILES['file9']['tmp_name'];
$file_type=$_FILES['file9']['type'];
$file_ext=strtolower(end(explode('.',$_FILES['file9']['name'])));

$expensions= array("jpeg","jpg","png");

if(in_array($file_ext,$expensions)=== false){
$errors[]="extension not allowed, please choose a JPEG or PNG file.";
}

if($file_size > 5097152){
$errors[]='File size must be excately 2 MB';
}

if(empty($errors)==true){
move_uploaded_file($file_tmp,"../architect1/architect_files/".$file_name);
rename('../architect1/architect_files/'.$file_name,'../architect1/architect_files/file9.jpg');
echo "Success";
}else{
print_r($errors);
}
}


if(isset($_FILES['file10'])){
$errors= array();
$file_name = $_FILES['file10']['name'];
$file_size =$_FILES['file10']['size'];
$file_tmp =$_FILES['file10']['tmp_name'];
$file_type=$_FILES['file10']['type'];
$file_ext=strtolower(end(explode('.',$_FILES['file10']['name'])));

$expensions= array("jpeg","jpg","png");

if(in_array($file_ext,$expensions)=== false){
$errors[]="extension not allowed, please choose a JPEG or PNG file.";
}

if($file_size > 5097152){
$errors[]='File size must be excately 2 MB';
}

if(empty($errors)==true){
move_uploaded_file($file_tmp,"../architect1/architect_files/".$file_name);
rename('../architect1/architect_files/'.$file_name,'../architect1/architect_files/file10.jpg');
echo "Success";
}else{
print_r($errors);
}
}


if(isset($_FILES['file11'])){
$errors= array();
$file_name = $_FILES['file11']['name'];
$file_size =$_FILES['file11']['size'];
$file_tmp =$_FILES['file11']['tmp_name'];
$file_type=$_FILES['file11']['type'];
$file_ext=strtolower(end(explode('.',$_FILES['file11']['name'])));

$expensions= array("jpeg","jpg","png");

if(in_array($file_ext,$expensions)=== false){
$errors[]="extension not allowed, please choose a JPEG or PNG file.";
}

if($file_size > 5097152){
$errors[]='File size must be excately 2 MB';
}

if(empty($errors)==true){
move_uploaded_file($file_tmp,"../architect1/architect_files/".$file_name);
rename('../architect1/architect_files/'.$file_name,'../architect1/architect_files/file11.jpg');
echo "Success";
}else{
print_r($errors);
}
}


if(isset($_FILES['file12'])){
$errors= array();
$file_name = $_FILES['file12']['name'];
$file_size =$_FILES['file12']['size'];
$file_tmp =$_FILES['file12']['tmp_name'];
$file_type=$_FILES['file12']['type'];
$file_ext=strtolower(end(explode('.',$_FILES['file12']['name'])));

$expensions= array("jpeg","jpg","png");

if(in_array($file_ext,$expensions)=== false){
$errors[]="extension not allowed, please choose a JPEG or PNG file.";
}

if($file_size > 5097152){
$errors[]='File size must be excately 2 MB';
}

if(empty($errors)==true){
move_uploaded_file($file_tmp,"../architect1/architect_files/".$file_name);
rename('../architect1/architect_files/'.$file_name,'../architect1/architect_files/file12.jpg');
echo "Success";
}else{
print_r($errors);
}
}

if(isset($_FILES['file14'])){
$errors= array();
$file_name = $_FILES['file14']['name'];
$file_size =$_FILES['file14']['size'];
$file_tmp =$_FILES['file14']['tmp_name'];
$file_type=$_FILES['file14']['type'];
$file_ext=strtolower(end(explode('.',$_FILES['file14']['name'])));

$expensions= array("jpeg","jpg","png");

if(in_array($file_ext,$expensions)=== false){
$errors[]="extension not allowed, please choose a JPEG or PNG file.";
}

if($file_size > 5097152){
$errors[]='File size must be excately 2 MB';
}

if(empty($errors)==true){
move_uploaded_file($file_tmp,"../architect1/architect_files/".$file_name);
rename('../architect1/architect_files/'.$file_name,'../architect1/architect_files/file14.jpg');
echo "Success";
}else{
print_r($errors);
}
}

header('Location: headerfooter.php');

}
?>

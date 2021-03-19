<?php


class CopyPaste extends Exchange
{
   function CoPy()
 {
   $source = 'index.html';
   $dest = '../health1/home.html';
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
         $dest = '../health1/home.html';
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
$str11=$_POST['TeleNo'];
$cp1=new CopyPaste;
$cp1->CoPy();
$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$ste11);

$str1='rip2';
$str11=$_POST['monfri'];
$cp1=new CopyPaste;
$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$ste11);

$str1='rip3';
$str11=$_POST['Email'];
$cp1=new CopyPaste;
$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$ste11);

$str1='rip4';
$str11=$_POST['name'];
$cp1=new CopyPaste;
$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$ste11);

$str1='rip5';
$str11=$_POST['desc'];
$cp1=new CopyPaste;
$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$ste11);

$str1='rip6';
$str11=$_POST['doc1'];
$cp1=new CopyPaste;
$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$ste11);

$str1='rip7';
$str11=$_POST['post1'];
$cp1=new CopyPaste;
$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$ste11);

$str1='rip8';
$str11=$_POST['doc2'];
$cp1=new CopyPaste;
$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$ste11);

$str1='rip9';
$str11=$_POST['post2'];
$cp1=new CopyPaste;
$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$ste11);

$str1='ripa';
$str11=$_POST['docNo2'];
$cp1=new CopyPaste;
$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$ste11);

$str1='ripb';
$str11=$_POST['docmail2'];
$cp1=new CopyPaste;
$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$ste11);

$str1='ripc';
$str11=$_POST['doc3'];
$cp1=new CopyPaste;
$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$ste11);

$str1='ripd';
$str11=$_POST['post3'];
$cp1=new CopyPaste;
$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$ste11);

$str1='ripe';
$str11=$_POST['docNo3'];
$cp1=new CopyPaste;
$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$ste11);

$str1='ripf';
$str11=$_POST['docmail3'];
$cp1=new CopyPaste;
$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$ste11);

$str1='ripg';
$str11=$_POST['doc4'];
$cp1=new CopyPaste;
$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$ste11);

$str1='riph';
$str11=$_POST['post4'];
$cp1=new CopyPaste;
$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$ste11);

$str1='ripi';
$str11=$_POST['docNo4'];
$cp1=new CopyPaste;
$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$ste11);

$str1='ripj';
$str11=$_POST['docmail4'];
$cp1=new CopyPaste;
$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$ste11);

$str1='ripk';
$str11=$_POST['news1'];
$cp1=new CopyPaste;
$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$ste11);

$str1='ripl';
$str11=$_POST['newsdesc1'];
$cp1=new CopyPaste;
$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$ste11);

$str1='ripm';
$str11=$_POST['news2'];
$cp1=new CopyPaste;
$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$ste11);

$str1='ripn';
$str11=$_POST['newsdesc2'];
$cp1=new CopyPaste;
$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$ste11);

$str1='ripo';
$str11=$_POST['news3'];
$cp1=new CopyPaste;
$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$ste11);

$str1='ripp';
$str11=$_POST['newsdesc3'];
$cp1=new CopyPaste;
$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$ste11);

$str1='ripq';
$str11=$_POST['sat'];
$cp1=new CopyPaste;
$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$ste11);

$str1='ripr';
$str11=$_POST['sun'];
$cp1=new CopyPaste;
$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$ste11);





//image upload

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
move_uploaded_file($file_tmp,"../health1/images/".$file_name);
rename('../health1/images/'.$file_name,'../health1/images/file1.jpg');
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
move_uploaded_file($file_tmp,"../health1/images/".$file_name);
rename('../health1/images/'.$file_name,'../health1/images/file2.jpg');
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
move_uploaded_file($file_tmp,"../health1/images/".$file_name);
rename('../health1/images/'.$file_name,'../health1/images/file3.jpg');
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
move_uploaded_file($file_tmp,"../health1/images/".$file_name);
rename('../health1/images/'.$file_name,'../health1/images/file4.jpg');
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
$file_ext=strtolower(end(explode('.',$_FILES['file1']['name'])));

$expensions= array("jpeg","jpg","png");

if(in_array($file_ext,$expensions)=== false){
$errors[]="extension not allowed, please choose a JPEG or PNG file.";
}

if($file_size > 5097152){
$errors[]='File size must be excately 2 MB';
}

if(empty($errors)==true){
move_uploaded_file($file_tmp,"../health1/images/".$file_name);
rename('../health1/images/'.$file_name,'../health1/images/file5.jpg');
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
$file_ext=strtolower(end(explode('.',$_FILES['file1']['name'])));

$expensions= array("jpeg","jpg","png");

if(in_array($file_ext,$expensions)=== false){
$errors[]="extension not allowed, please choose a JPEG or PNG file.";
}

if($file_size > 5097152){
$errors[]='File size must be excately 2 MB';
}

if(empty($errors)==true){
move_uploaded_file($file_tmp,"../health1/images/".$file_name);
rename('../health1/images/'.$file_name,'../health1/images/file6.jpg');
echo "Success";
}else{
print_r($errors);
}
}


header('Location: ../health1/home.html');
}



?>

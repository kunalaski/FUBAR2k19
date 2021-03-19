<?php
//header('Location: ../../object.php');
///file_put_contents("../cv1/home.html", "");
class CopyPaste extends Exchange
{
   function CoPy()
 {
   $source = 'index.html';
   $dest = '../cv1/home.html';
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
         $dest = '../cv1/home.html';
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
$cp1->CoPY();
$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$ste11);

$str1='rip2';
$str11=$_POST['prof'];
$cp1=new CopyPaste;

$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$ste11);

$str1='rip3';
$str11=$_POST['add1'];
$cp1=new CopyPaste;

$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$ste11);

$str1='rip4';
$str11=$_POST['mail1'];
$cp1=new CopyPaste;

$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$ste11);

$str1='rip5';
$str11=$_POST['mob1'];
$cp1=new CopyPaste;

$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$ste11);

$str1='rip7';
$str11=$_POST['skill1'];
$cp1=new CopyPaste;

$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$ste11);

$str1='rip8';
$str11=$_POST['skill2'];
$cp1=new CopyPaste;

$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$ste11);

$str1='rip9';
$str11=$_POST['skill3'];
$cp1=new CopyPaste;

$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$ste11);

$str1='ripa';
$str11=$_POST['skill4'];
$cp1=new CopyPaste;

$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$ste11);

$str1='ripb';
$str11=$_POST['lang1'];
$cp1=new CopyPaste;

$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$ste11);

$str1='ripc';
$str11=$_POST['lang2'];
$cp1=new CopyPaste;

$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$ste11);


$str1='ripd';
$str11=$_POST['lang3'];
$cp1=new CopyPaste;

$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$ste11);

$str1='ripe';
$str11=$_POST['post1'];
$cp1=new CopyPaste;

$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$ste11);

$str1='ripf';
$str11=$_POST['dur1'];
$cp1=new CopyPaste;

$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$ste11);

$str1='ripg';
$str11=$_POST['detail1'];
$cp1=new CopyPaste;

$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$ste11);

$str1='riph';
$str11=$_POST['post2'];
$cp1=new CopyPaste;

$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$ste11);

$str1='ripi';
$str11=$_POST['dur2'];
$cp1=new CopyPaste;

$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$ste11);

$str1='ripj';
$str11=$_POST['detail2'];
$cp1=new CopyPaste;

$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$ste11);

$str1='ripk';
$str11=$_POST['post3'];
$cp1=new CopyPaste;

$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$ste11);

$str1='ripl';
$str11=$_POST['dur3'];
$cp1=new CopyPaste;

$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$ste11);


$str1='ripm';
$str11=$_POST['detail3'];
$cp1=new CopyPaste;

$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$ste11);

$str1='ripn';
$str11=$_POST['institute1'];
$cp1=new CopyPaste;

$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$ste11);

$str1='ripo';
$str11=$_POST['dur1'];
$cp1=new CopyPaste;

$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$ste11);

$str1='ripp';
$str11=$_POST['edu1'];
$cp1=new CopyPaste;

$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$ste11);

$str1='ripq';
$str11=$_POST['institute2'];
$cp1=new CopyPaste;

$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$ste11);

$str1='ripr';
$str11=$_POST['dur2'];
$cp1=new CopyPaste;

$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$ste11);

$str1='rips';
$str11=$_POST['edu2'];
$cp1=new CopyPaste;

$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$ste11);

$str1='ript';
$str11=$_POST['institute3'];
$cp1=new CopyPaste;

$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$ste11);

$str1='ripu';
$str11=$_POST['dur3'];
$cp1=new CopyPaste;

$cp1->Exchange1($str1,$str11);
unset($cp1,$str1,$ste11);

$str1='ripv';
$str11=$_POST['edu3'];
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



$uploadOK = 1;

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
move_uploaded_file($file_tmp,"../cv1/cv_files/".$file_name);
rename('../cv1/cv_files/'.$file_name,'../cv1/cv_files/file1.jpg');
echo "Success";
}else{
print_r($errors);
}
}
header('Location: headerfooter.php');
}
?>

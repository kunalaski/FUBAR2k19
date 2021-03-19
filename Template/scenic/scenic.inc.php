<?php
//header('Location: ../../object.php');
file_put_contents("../scenic1/home.html", "");
class CopyPaste extends Exchange
{
   function CoPy()
 {
   $source = 'index.html';
   $dest = '../scenic1/home.html';
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
         $dest = '../scenic1/home.html';
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

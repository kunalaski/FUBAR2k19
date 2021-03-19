<?php

//header('Location: ../../object.php');

$dir = '../architect1';
$zip_file = 'arch.zip';

// Get real path for our folder
$rootPath = realpath($dir);

// Initialize archive object
$zip = new ZipArchive();
$zip->open($zip_file, ZipArchive::CREATE | ZipArchive::OVERWRITE);

// Create recursive directory iterator
//@var SplFileInfo[] $files
$files = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($rootPath),
    RecursiveIteratorIterator::LEAVES_ONLY
);

foreach ($files as $name => $file)
{
    // Skip directories (they would be added automatically)
    if (!$file->isDir())
    {
        // Get real and relative path for current file
        $filePath = $file->getRealPath();
        $relativePath = substr($filePath, strlen($rootPath) + 1);

        // Add current file to archive
        $zip->addFile($filePath, $relativePath);
    }
}

// Zip archive will be created only after closing object
$zip->close();
//header('Location: ../../object.php?arch');


if(isset($_GET['mail']))
{
$mail = $_GET['mail'];

//$date = new DateTime('2000-01-01');
$build = 'builds/'.$mail.''.rand();
$result = $build;
/*if (!is_dir($result)) {
    mkdir($result);
    $result = '"'.$result.'"';
    echo 'xcopy /E/S "../architect1" '.$result;
    echo exec('xcopy /E/S "../architect1" '.$result);
    $deploy_url = "https://fubar2k19.github.io/FUBAR-Final/Template/architect/".$build."/home.html";
  //  system("cmd /c C:[ C:\xampp\htdocs\builder\site_deploy_watcher.bat]");*/

  function recurse_copy($src, $dst) {

    $dir = opendir($src);
    $result = ($dir === false ? false : true);

    if ($result !== false) {
      $result = @mkdir($dst);

      if ($result === true) {
        while(false !== ( $file = readdir($dir)) ) {
          if (( $file != '.' ) && ( $file != '..' ) && $result) {
            if ( is_dir($src . '/' . $file) ) {
              $result = recurse_copy($src . '/' . $file,$dst . '/' . $file);
            }     else {
              $result = copy($src . '/' . $file,$dst . '/' . $file);
            }
          }
        }
        closedir($dir);
      }
    }

    return $result;
  }
  $src='../architect1';

recurse_copy($src, $result);
//header('Location:SendMail.php?mail='.$mail.'&url='.$deploy_url);
}
else {
  echo "error";
}
//$zip = new ZipArchive();
//$zipp = $zip->open($filename);
/*$id = $_SESSION['userID'];
$name = "../constructive1/";
$temp = $name.$id;
rmdir($temp);
if (file_exists($temp)) {

  echo $id;
}
else {
    mkdir($temp, 0777, true);
    $src = 'cons.zip';
    $dest = '../constructive1/' . $id . '/';
    rename($src, $dest);
    echo "string";

  }*/

?>

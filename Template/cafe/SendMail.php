<?php
session_start();
include "includes/db.inc.php";
$id = $_SESSION['userID'];
$query = "SELECT EmailID FROM registration WHERE ID = '$id'; ";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_assoc($result))
 {
   $uid=$row['EmailID'];
   echo $uid;
}
}
else {
  echo "no result";
}

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'maildemo/vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = ' smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'kunalkamble20k@gmail.com';                 // SMTP username
    $mail->Password = 'kunal1107';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('kunalkamble20k@gmail.com', 'FUBAR');
    $mail->addAddress($uid);     // Add a recipient               // Name is optional

    //Attachments
    $mail->addAttachment('Template/cons.zip');         // Add attachments
    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Your website';
    $mail->Body    = 'Test model 117 <b>CONSTRUCTIVE!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}

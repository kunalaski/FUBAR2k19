<?php

if (!$_GET['mail']) {
  echo "404 not found";
}
else {
$mail = $_GET['mail'];
echo $mail;
$mailto = $mail;

$to          = $mailto; // addresses to email pdf to

/*$from        = "FUBAR2k19@gmail.com"; // address message is sent from
$subject     = "Your website email subject"; // email subject
$body        = "<p>The webpage is attached.</p>"; // email body
$pdfLocation = ""; // file location
$pdfName     = "arch.zip"; // pdf file name recipient will get
$filetype    = "zip"; // type

// creates headers and mime boundary
$eol = PHP_EOL;
$semi_rand     = md5(time());
$mime_boundary = "==Multipart_Boundary_$semi_rand";
$headers       = "From: $from$eolMIME-Version: 1.0$eol" .
    "Content-Type: multipart/mixed;$eol boundary=\"$mime_boundary\"";

// add html message body
$message = "--$mime_boundary$eol" .
    "Content-Type: text/html; charset=\"iso-8859-1\"$eol" .
    "Content-Transfer-Encoding: 7bit$eol$eol$body$eol";

// fetches pdf
$file = fopen($pdfLocation, 'rb');
$data = fread($file, filesize($pdfLocation));
fclose($file);
$pdf = chunk_split(base64_encode($data));

// attaches pdf to email
$message .= "--$mime_boundary$eol" .
    "Content-Type: $filetype;$eol name=\"$pdfName\"$eol" .
    "Content-Disposition: attachment;$eol filename=\"$pdfName\"$eol" .
    "Content-Transfer-Encoding: base64$eol$eol$pdf$eol--$mime_boundary--";

// Sends the email
if(mail($to, $subject, $message, $headers)) {
    echo "The email was sent.";
    header('Location: download.php');
}
else {
    echo "There was an error sending the mail.";
}*/

$url = $_GET['url'];
$file = 'cv.zip';
$content = file_get_contents( $file);
$content = chunk_split(base64_encode($content));
$uid = md5(uniqid(time()));
$name = basename($file);
// header
$header = "From: WEBL <FUBAR2k19@gmail.com>\r\n";
$header .= "Reply-To: FUBAR2k19@gmail.com\r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-Type: multipart/mixed; boundary=\"".$uid."\"\r\n\r\n";
$header .= "URL of your site =".$url."\r\n"
// message & attachment
$filename= "cv.zip";
$nmessage = "--".$uid."\r\n";
$nmessage .= "Content-type:text/plain; charset=iso-8859-1\r\n";
$nmessage .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
$nmessage .= "\r\n\r\n";
$nmessage .= "--".$uid."\r\n";
$nmessage .= "Content-Type: application/octet-stream; name=\"".$filename."\"\r\n";
$nmessage .= "Content-Transfer-Encoding: base64\r\n";
$nmessage .= "Content-Disposition: attachment; filename=\"".$filename."\"\r\n\r\n";
$nmessage .= $content."\r\n\r\n";
$nmessage .= "--".$uid."--";
$subject="Here is your webpage";
if (mail($mailto, $subject, $nmessage, $header)) {
  // Or do something here
    header('Location: download.php?url='.$url);
} else {
  return false;
}

}
// Import PHPMailer classes into the global namespace
/*// These must be at the top of your script, not inside a function
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
    $mail->Username = 'FUBAR2k19@gmail.com';                 // SMTP username
    $mail->Password = 'amigos..';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('FUBAR2k19@gmail.com', 'FUBAR');
    $mail->addAddress($mail);     // Add a recipient               // Name is optional

    //Attachments
    $mail->addAttachment('dark.zip');         // Add attachments
    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Your website';
    $mail->Body    = 'Test model 117 <b>DARK PORTFOLIO !</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}*/

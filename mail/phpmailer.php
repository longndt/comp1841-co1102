<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {
   //Server settings
   $mail->SMTPDebug = 2;                                       // Enable verbose debug output
   $mail->isSMTP();                                            // Set mailer to use SMTP
   $mail->Host       = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
   $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
   $mail->Username   = 'sender_email_address';                 // SMTP username
   $mail->Password   = 'sender_email_password';                // SMTP password
   $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
   $mail->Port       = 587;                                    // TCP port to connect to

   //Recipient
   $mail->addAddress('recipient_email_address');     // Add a recipient

   //Content
   $mail->isHTML(true);                                        // Set email format to HTML
   $mail->Subject = 'Here is the subject';
   $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
   $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

   $mail->send();
   echo 'Message has been sent';
} catch (Exception $e) {
   echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

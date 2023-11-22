<?php
//1. load the form to send email first
if (!isset($_POST['message'])) {
   $title = "Contact us";
   ob_start();
   include 'templates/mailform.html.php';
   $output = ob_get_clean();
}
//2. send the message in the form later
else {
   $title = "Contact us";
   $message = $_POST['message'];
   //use mail() function to send email
   /* 3 parameters in mail() function:
      - recepient's emails
      - email's header (title)
      - email's content
   */
   if (mail("recipient_email", "mail_subject", $message)) {
      $output = "Thank you for your message we will get back to you soon";
   } else {
      $lastError = error_get_last();
      $output = "Email could not be sent. Error: " . $lastError['message'];
   }
}
include 'templates/layout.html.php';

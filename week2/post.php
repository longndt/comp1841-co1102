<?php 
if (isset($_POST['email'])) {
   $email = $_POST['email'];
   $password = $_POST['password'];

   if ($email == 'admin@fpt.edu.vn' && $password == 'admin') {
     include "success.html.php";
   }
   else {
     include "fail.html.php";
   }   
}
?>
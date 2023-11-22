<?php
   //1st case: user do not submit Login form => render login form
   if (!isset($_POST['login'])) {
      include 'login.html.php';
   }
   //2nd case: user already submit Login form => process login data
   else {
      $username = $_POST['username'];
      $password = $_POST['password'];
      //check (validate) the login data
      //1. case 1: user login succeed
      if ($username == "admin" && $password == "123456") {
         //start new session
         session_start();
         //create session variable to store username
         $_SESSION['username'] = $username;
         //redirect to homepage
         header ('Location: index.php');
      }
      //2. case 2: user login failed
      else {
         header ('Location: login.php');
      }
   }
?>
<?php 
if (isset($_POST['name'])) {
   $name = $_POST['name'];
   $birthday = $_POST['birthday'];
   $email = $_POST['email'];
   $year = $_POST['year'];
   $gender = $_POST['gender'];
   $major = $_POST['major'];

   echo "Name: " . $name . "<br>";
   echo "Birthday: " . $birthday . "<br>";
   echo "Email: " . $email . "<br>";
   echo "Student year: " . $year . "<br>";
   echo "Gender: " . $gender . "<br>";
   echo "Major: " . $major . "<br>";
}
?>
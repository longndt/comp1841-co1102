<?php 
//get.php : receive data

//validation: check whether data is sent or not
if ((isset($_GET['name']))
 && (isset($_GET['age'])) 
 && (isset($_GET['job']))) {
   //get name
   echo "Name: " . $_GET['name'] . "<br>";

   //get age
   $age = $_GET['age'];
   $current_year = date("Y");
   $birth_year = $current_year - $age;
   echo "Age: $age  <br>";
   echo "Birth year: $birth_year  <br>";

   //get job
   echo "Job: " . $_GET['job'] . "<br>";
} else {
   echo "Data is not sent. Nothing to show <br>";
   echo "Click <a href='get.html.php'>here</a>
   to send data first";
}
?>
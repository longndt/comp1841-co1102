<?php
//receive data from "demo.html" by GET method
if (isset($_GET['year'])) {
   //avoid security hole with "htmlspecialchars" function
   $year = htmlspecialchars($_GET['year'],ENT_QUOTES, 'UTF-8');
   echo "We are living in $year <br>";
} else {
   echo "Error: year is not sent <br>";
}

if (isset($_GET['city'])) {
   $city =
   htmlspecialchars($_GET['city'], ENT_QUOTES, 'UTF-8');
   echo "We are living in $city <br>";
} else {
   echo "Error: city is not sent <br>";
}

if (isset($_GET['country'])) {
   $country =
   htmlspecialchars($_GET['country'], ENT_QUOTES, 'UTF-8');
   echo "We are living in $country <br>";
} else {
   echo "Error: country is not sent <br>";
}


?>
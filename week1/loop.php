<?php 
//for loop
for ($i=1; $i<=10; $i++) {
   echo $i . "<br>";
}

//while loop
$i = 1;
while ($i<=20) {
      echo $i . "<br>";
      $i++;
}
//do while loop
$i = 1;
do {
   echo $i . "<br>";
   $i++;
}
while ($i <= 30);

//declare array
$cities = array("Hanoi", "HCM City", "Da Nang");
//1st way: display array with for loop
for ($i = 0; $i < count($cities); $i++) {
   echo "[$i] : $cities[$i] <br>";
}
//2nd way: display array with foreach loop
foreach ($cities as $city) 
   echo $city . '<br>';
?>
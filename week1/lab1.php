<?php 
//TASK 1
function hello() {
   echo "Hello, World ! <br>";
}
hello();

//TASK 2
$current_month = date("F");
//echo $current_month;
if ($current_month == "August")
   echo "It's August, so it's really hot. <br>";
else 
   echo "Not August, so at least not in the peak of the heat. <br>";

//TASK 3
function calcRectangleArea ($width, $height) {
   // $area = $width * $height;
   // return $area;
   return ($width * $height);
}
$width = 3.5;
$height = 5.8;
$area = calcRectangleArea($width, $height);
echo "A rectangle of width $width and height $height has an area of $area.";
?>
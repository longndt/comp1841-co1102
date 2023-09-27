<?php
//single line comment
/*
   multiple line comment
*/
echo "Today is Wednesday <br>";
print "<h1 style='color: red;'>We are learning PHP</h1>";
// use dollar ($) symbol to define variables in PHP
// no need to define data type for variables
$a = 10; //integer
$b = 5.8;  //float
echo "a = " . $a . "<br>"; // dot (.) symbol : concatenation (merge)
print '$b = ' . "$b" . "<br>";
// single quote (' ') : display variable's name
// double quote (" ") : display variable's value

/*
   gpa>=7.0 && gpa<=10.0 : distinction (if)
   gpa>=6.0 && gpa<7.0   : merit  (else if)
   gpa>=4.0 && gpa<6.0   : pass   (else if)
   gpa<4.0  && gpa>=0.0     : refer  (else if)
   gpa<0 || gpa > 10     : invalid grade (else)
   => Solution: if else
*/
$gpa = -4.5;
if ($gpa >= 7.0 && $gpa <= 10.0) {
   echo "Distinction";
} else if ($gpa >= 6.0 && $gpa < 7.0) {
   echo "Merit";
} else if ($gpa >= 4.0 && $gpa < 6.0) {
   echo "Pass";
} else if ($gpa <4.0 && $gpa >= 0.0) {
   echo "Refer";
} else {
   echo "Invalid grade";  //input validation (exception)
}
/*
   menu 1: addition
   menu 2: subtraction
   menu 3: multiplication
   menu 4: division
   => Solution: switch case
*/
?>

<!-- html section -->
<h1 style="color: blue;">COMP1841</h1>
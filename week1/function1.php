<?php
//main purpose of function: code reuse

//1st: function without parameter and no return
//declare function 
function hello() {
   echo "Hello everyone. I am learning PHP <br>";
   echo "Techniques: PHP, MySQL, HTML <br>";
}
//run (call) function
hello();

//2nd: function with parameter and no return
function sayHi($name) {
   echo "Welcome $name to Greenwich Vietnam <br>";
}
sayHi("Hoang Tuan Minh");

//3rd: function without parameter and has return
function welcome() {
   return "Welcome to Hanoi - the capital of Vietnam <br>";
}
echo welcome();

//4th: function with parameter and has return
function total($x, $y) {
   $z = $x + $y;
   return $z;
}
echo total(5,8);
?>


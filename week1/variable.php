<?php 
//PHP will automatically set the data type for variable based on input value

//for number, boolean: do not use quotation when assigning value

$x1 = 5; //integer
$x2a = 3.14;  //float
$x2b = "3.14";  //string not float
$x3 = "Greenwich Vietnam";  //string
$x4 = true;  //boolean
$x5 = NULL;



//use $ symbol to declare variable in PHP
$a = 17;  
$b = 3;
$c = $a + $b; //addition
echo "$a <br>";
print $b . "<br>";
//single quotation (' '): display variable's name
//double quotation (" "): display variable's value
//dot symbol (.): string concatenation (merge)
echo '$c' . " = $c";
$d = $a - $b;  //subtraction
$e = $a * $b;  //multiplication
$f = $a / $b;  //division
$g = $a % $b;  //modulus (get remainder of division)
echo "<br>" . "$f";
echo "<br>" . "$g" . "<br>";

$x = 10;
//x++: postfix increment: assign value first, increase value later
$y = $x++;     //y=x=10       => x++=10+1=11
//++x: prefix increment: increase value first, assign value later
$z = ++$x;     //++x=11+1=12  => z=x=12
print "<strong>x = $x </strong><br>";   //12
print "<em>y = $y </em><br>";           //10
print "<u>z = $z </u><br>";             //12
?>
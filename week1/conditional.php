<?php 
//if else
//if: first case
//elseif: middle case(s)
//else: last case
$grade = 8.7;
if ($grade >= 7.0 && $grade <= 10.0) {
   echo "Distinction <br>";
} elseif ($grade >= 6.0 && $grade < 7.0) {
   echo "Merit <br>";
} elseif ($grade >= 4.0 && $grade < 6.0) {
   echo "Pass <br>";
} else {  //grade < 4.0
   echo "Failed <br>";
}
//switch case
$menu = 1;
switch ($menu) {
   case 1:  //if
      print "You've selected menu 1 <br>";
      //always insert "break" at the end 
      break;
   case 2:  //elseif
      print "You've selected menu 2 <br>";
      break;
   case 3:  //elseif
      print "You've selected menu 3 <br>";
      break;
   default: //else
      print "Invalid menu. Select again ! <br>";
      break;
}
?>
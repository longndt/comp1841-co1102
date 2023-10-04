<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Form</title>  
   <link rel="stylesheet" href="style.css">
</head>
<body>
   <form action="index.php" method="post">
     Value 1: <input class="number" type="text" name="val1" id="">
     Value 2: <input class="number" type="text" name="val2" id="">
     <hr>
     Calculation: <br>
     <input type="radio" name="calc" value="add"> Add
     <input type="radio" name="calc" value="sub"> Subtract
     <input type="radio" name="calc" value="mul"> Multiply
     <input type="radio" name="calc" value="div"> Divide
     <br>
     <input class="button" type="submit" value="Calculate">
     <input class="button" type="reset" value="Clear">
   </form>
</body>
</html>
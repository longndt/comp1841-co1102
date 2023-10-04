<?php
if (!isset($_POST['val1']))
{
	//include your form template here
	include 'templates/form.html.php';
}
else{
	$val1 = $_POST ['val1'] ;
	$val2 = $_POST ['val2'] ; 
	//validation: 
	//input value must be number format (integer or float)
	//calculation must be selected
	if (
		is_numeric($val1) &&
		is_numeric($val2) &&
		isset($_POST ['calc']) ) {
		$calc = $_POST['calc'];
		switch ($calc) {
			case "add":
				$result = $val1 + $val2;
				break;
			case "sub":
				$result = $val1 - $val2;
				break;
			case "mul":
				$result = $val1 * $val2;
				break;
			case "div":
				$result = $val1 / $val2;
				break;
		}
		$output = "Calculation result: " . $result;

		//include your result template here
		include 'templates/result.html.php';
	}
	else {
		//case 1: user do not select any calculation
		if (!isset($_POST['calc']))
			$error = "Error: You must select calculation";
		//case 2: user input wrong number format	
		else if (!(is_numeric($val1)) || !(is_numeric($val2)))
			$error = "Error: You must input correct number format";
		
			//include your error template here
		include 'templates/error.html.php';
	}
}

<?php
if (!isset($_POST['val1']))
{
	//include your form template here
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
		}
		$output = "Calculation result: " . $result;

		//include your result template here
	}
}

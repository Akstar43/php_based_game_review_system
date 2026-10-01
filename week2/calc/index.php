<?php
if (!isset($_POST['val1'])) {
	include 'templates/form.html.php';
} else {
	$val1 = $_POST['val1'];
	$val2 = $_POST['val2'];
	$calc = $_POST['calc'];

	if(is_numeric($val1) && is_numeric($val2)) {
	switch ($calc) {
	case "add":$result = $val1 + $val2;
		break;
	case "sub":$result = $val1 - $val2;
		break;
	case "multi":$result = $val1 * $val2;
	break;
	case "divide": $result = $val1 / $val2;
	break;
	}
	$output = "Calculation result:" . " " . $result;
include 'templates/result.html.php';
	}
	else {
		$error = "Value1: " . $val1 . " " . "or" . " " . "Value2: " . $val2 . " " . "is not numeric";
		include 'templates/error.html.php';
	}
}
?>
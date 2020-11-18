<?php
	/*
	var_dump($_REQUEST);
	echo "<hr>";

	echo $_REQUEST['name'];
	*/
	/*
	var_dump($_GET);
	echo "<hr>";

	echo $_GET['name'];
	*/
	var_dump($_POST);
	echo "<hr>";

	//echo $_POST['name'];
	$n1 = $_REQUEST['num1'];
	$n2 = $_REQUEST['num2'];
	$resultado = 0;
	$metodo = $_REQUEST['metodo'];

	if ($metodo == "suma") {
		$resultado = $n1 + $n2;
	}
	if ($metodo == "res") {
		$resultado = $n1 - $n2;
	}
	if ($metodo == "multi") {
		$resultado = $n1 * $n2;
	}
	if ($metodo == "divi") {
		$resultado = $n1 / $n2;
	}
	echo $resultado;
?>
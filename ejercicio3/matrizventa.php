<!DOCTYPE html>
<html>
<head>
	<title>Automotriz Carro Fácil</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilophp.css">
</head>
<body>
	<h1>Datos de la empresa</h1>
	<?php
	//Capturano datos y declarando variables
	$trimetre1 = array();
	$trimetre2 = array();
	$trimetre3 = array();
	$trimetre4 = array();

	$Pdato1 = $_POST['Pdato1'];
	$Vdato1 = $_POST['Vdato1'];
	$Ldato1 = $_POST['Ldato1'];

	$Pdato2 = $_POST['Pdato2'];
	$Vdato2 = $_POST['Vdato2'];
	$Ldato2 = $_POST['Ldato2'];

	$Pdato3 = $_POST['Pdato3'];
	$Vdato3 = $_POST['Vdato3'];
	$Ldato3 = $_POST['Ldato3'];

	$Pdato4 = $_POST['Pdato4'];
	$Vdato4 = $_POST['Vdato4'];
	$Ldato4 = $_POST['Ldato4'];

	array_push($trimetre1, $Pdato1, $Vdato1, $Ldato1);
	array_push($trimetre2, $Pdato2, $Vdato2, $Ldato2);
	array_push($trimetre3, $Pdato3, $Vdato3, $Ldato3);
	array_push($trimetre4, $Pdato4, $Vdato4, $Ldato4);

	$totalLomas = $trimetre1[2] + $trimetre2[2] + $trimetre3[2] + $trimetre4[2];

	echo "<p>a) ¿Cuál fue el total anual de ventas de la agencia Lomas? . $totalLomas$</p>";

	$totalVentasT2 = array_sum($trimetre2);
	$promedioT2 = $totalVentasT2 / 3;
	echo "<p>b)¿Cuál fue el promedio de ventas de Carro Fácil en el segundo trimestre del año?"  . number_format($promedioT2,2) ;

	$totalVentasT3 = array_sum($trimetre3);
	$promedioT3 = $totalVentasT2 / 3;
	$ventaMaxP = max($trimetre1[0], $trimetre2[0], $trimetre3[0], $trimetre4[0]);
	$ventaMaxV = max($trimetre1[1], $trimetre2[1], $trimetre3[1], $trimetre4[1]);
	$ventaMaxL = max($trimetre1[2], $trimetre2[2], $trimetre3[2], $trimetre4[2]);

	if($ventaMaxP > $promedioT3){
		$valorMayorPromedio3 = $ventaMaxP;
	}elseif ($ventaMaxV > $promedioT3){
		$valorMayorPromedio3 = $ventaMaxV;
	}elseif ($ventaMaxL > $promedioT3){
		$valorMayorPromedio3 = $ventaMaxL;
	}
	echo "<p>c)¿Cuáles agencias superaron el promedio de ventas del tercer trimestre?  . $valorMayorPromedio3</p>";

	$ventaMinT1 = min($trimetre1);
	$ventaMinT2 = min($trimetre2);
	$ventaMinT3 = min($trimetre3);
	$ventaMinT4 = min($trimetre4);

	if($ventaMinT1 < $ventaMinT2){
		$valorVentaMin = $ventaMinT1;
	}elseif ($ventaMinT1 < $ventaMinT3){
		$valorVentaMin = $ventaMinT1;
	}elseif ($ventaMinT1 < $ventaMinT4){
		$valorVentaMin = $ventaMinT1;
	}elseif ($ventaMinT2 < $ventaMinT1){
		$valorVentaMin = $ventaMinT2;
	}elseif ($ventaMinT2 < $ventaMinT3){
		$valorVentaMin = $ventaMinT2;
	}elseif ($ventaMinT2 < $ventaMinT4){
		$valorVentaMin = $ventaMinT2;
	}elseif ($ventaMinT3 < $ventaMinT1){
		$valorVentaMin = $ventaMinT3;
	}elseif ($ventaMinT3 < $ventaMinT2){
		$valorVentaMin = $ventaMinT3;
	}elseif ($ventaMinT3 < $ventaMinT4){
		$valorVentaMin = $ventaMinT3;
	}elseif ($ventaMinT4 < $ventaMinT1){
		$valorVentaMin = $ventaMinT4;
	}elseif ($ventaMinT4 < $ventaMinT2){
		$valorVentaMin = $ventaMinT4;
	}elseif ($ventaMinT4 < $ventaMinT3){
		$valorVentaMin = $ventaMinT4;
	}
	echo "<p>d)¿En qué trimestre se registraron las menores ventas del año, considerando a todas las agencias? la venta menor fue: . $valorVentaMin</p>";
	?>
</body>
</html>
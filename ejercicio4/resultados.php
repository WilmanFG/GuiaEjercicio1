<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8" />
<title>Ejercicio 1 del Taller 1</title>
<link rel="stylesheet" href="css/fonts.css" />
<link rel="stylesheet" href="css/sticky-table.css" />
<link rel="stylesheet" href="css/lista.css" />
</head>
<body>
<section>
	<h2>Resultados</h2>
<article class="component">
<!-- <table>
<thead>
</thead>
<tbody> -->
<?php
if(isset($_POST['enviar'])){
if(isset($_POST['ingresados'])){
valoresCeros($_POST['ingresados']);
promedioImpares($_POST['ingresados']);
numerosNegativos($_POST['ingresados']);
menorMayor($_POST['ingresados']);
}
else{
$msgerr = "No hay edades que procesar.";
$nums = array($msgerr);
// pares($nums);
// positivo($_POST['ingresados']);
valoresCeros($_POST['ingresados']);
promedioImpares($_POST['ingresados']);
numerosNegativos($_POST['ingresados']);
menorMayor($_POST['ingresados']);
}
}

//Funcion para determinar la cantidad de valores ceros ingresados
function valoresCeros($nums){
$porcentaje = 0;
$contador = 0;
foreach($nums as $num){
 if($num == 0){
$contador++;
 }
}
$porcentaje = ($contador*100)/12;
$porcentaje = number_format($porcentaje, 2, ".", ",");
echo "<h2>El porcentaje de valores ceros ingresados en la lista de números es: $porcentaje %</h2>";
}

//Funcion para determinar el promedio de valores impares ingresados
function promedioImpares($nums){
$promedio = 0;
$contador = 0;
if(is_array($nums)){
foreach($nums as $num){
$promedio += $num;
$contador++;
}
$promedio /= $contador;
$promedio = number_format($promedio, 2, ".", ",");
echo "<h2>El promedio de valores impares ingresados en la lista de números es: $promedio</h2>";
}
}

//Funcion para determinar y mostrar los numeros negativos ingresados
function numerosNegativos($nums){
$descendente = [];
$contador = 0;
foreach($nums as $num){
 if($num < 0){
 	 array_push($descendente, $num);
 }
}
arsort($descendente);
echo "<h2>El listado de números negativos ingresados son:\n";
foreach($descendente as $descent){
    echo $descent. ",\n";
}
}

//Funcion para determinar el numero mayor y menor par positivo 
//de la lista de valores ingresados 
function menorMayor($nums){
$valores = [];
foreach($nums as $num){
 if($num%2 == 0 and $num > 0){
 	array_push($valores, $num);
 }
}
$mayor=max($valores);
$menor=min($valores);
echo "<h2>El número mayor par positivo del listado ingresado es: $mayor</h2>";
echo "<h2>Y el menor par positivo es: $menor</h2>";
}



?>
<!-- </table> -->
</article>
<!-- Librerías de jQuery para hacer el efecto stycky-headers -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-throttle-debounce/1.1/jquery.ba-throttle-debounce.min.js"></script>
<script src="js/modernizr.custom.lis.js"></script>
<script src="js/jquery.stickyheader.js"></script>
</section>
</body>
</html>
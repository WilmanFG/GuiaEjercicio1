<!DOCTYPE html>
<html lang="es">
<head>
<title>Ejercicio 1 Guia DSS</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/series1.css" />
<link rel="stylesheet" href="css/formoid-solid-purple.css" />
<script src="js/modernizr.custom.lis.js"></script>
</head>
</body>
<header>
<h1>Calculadora de resistencias y capacitores</h1>
</header>
<section>
<article>
<?php

if(isset($_POST['enviar'])){
if(isset($_POST['ingresados'])){
capcitorSerie($_POST['ingresados']);
}
else{
$msgerr = "No hay edades que procesar.";
$nums = array($msgerr);
capcitorSerie($_POST['ingresados']);
}
}
function capcitorSerie($nums){
$divcapacitor = 0;
$contador = 0;
if(is_array($nums)){
foreach($nums as $num){
$divcapacitor +=(1/$num);
$seriecapacitor = 1/$divcapacitor;
}
$seriecapacitor = number_format($seriecapacitor, 2, ".", ",");
echo "<h2 class=\"med\">La medida equivalente de la conexión en serie de los capacitores es de: $seriecapacitor uF</h2>";
}
}

die(
"<div class=\"enlace\">\t\n<a href=\"ejercicio1.html\">Regresar al inicio</a>\n</div>\n"
);

?>
</article>
</section>
</body>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
<script src="js/formoid-solid-purple.js"></script>
</html>
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
$dispositivoTipo = isset($_POST['seltipo']) ? $_POST['seltipo'] : "";
switch($dispositivoTipo){
case "resistencia":
echo "<form action='resistor.php' method='POST' class=\"formoid-solid-purple\">";
echo "<h2>Seleccione el tipo de conexión</h2>";
echo "<div class=\"element-select\">";
echo "<label class=\"title\"></label>";
echo "<div class=\"item-cont\">";
echo "<div class=\"large\">";
echo "<span>";
echo "<select name='seltipo'>";
echo "<option value='serie' selected='selected'>";
echo "Serie";
echo "</option>";
echo "<option value='paralelo'>";
echo "Paralelo";
echo "</option>";
echo "</select>";
echo "<i></i>";
echo "<span class=\"icon-place\"></span>";
echo "</span>";
echo "</div>";
echo "</div>";
echo "</div>";
echo "<div class=\"submit\">";
echo "<input type='submit' name='enviar' value='Enviar' />";
echo "</div>";
echo "</form>";
break;
case "capacitor":
echo "<form action='capacitor.php' method='POST' class=\"formoid-solid-purple\">";
echo "<h2>Seleccione el tipo de conexión</h2>";
echo "<div class=\"element-select\">";
echo "<label class=\"title\"></label>";
echo "<div class=\"item-cont\">";
echo "<div class=\"large\">";
echo "<span>";
echo "<select name='seltipo'>";
echo "<option value='serie' selected='selected'>";
echo "Serie";
echo "</option>";
echo "<option value='paralelo'>";
echo "Paralelo";
echo "</option>";
echo "</select>";
echo "<i></i>";
echo "<span class=\"icon-place\"></span>";
echo "</span>";
echo "</div>";
echo "</div>";
echo "</div>";
echo "<div class=\"submit\">";
echo "<input type='submit' name='enviar' value='Enviar' />";
echo "</div>";
echo "</form>";
break;
case "NumerosPares":
$inicio = '0';
$final = '50';
$salto = '2';
break;
case "NumerosImpares":
$inicio = '1';
$final = '50';
$salto = '2';
break;
}
// $secuencia = range($inicio,$final,$salto);
// echo "<div id=\"box\">";
// // foreach($secuencia as $letra)
// echo "<span class=\"caracter\">" . $letra . "</span>&nbsp;&nbsp;\n";
// echo "</div>";
}
?>
</article>
</section>
</body>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
<script src="js/formoid-solid-purple.js"></script>
</html>
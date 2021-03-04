<!DOCTYPE html>
<html lang="es">
<head>
<title>Ejercicio 1 Guia DSS</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/series1.css" />
<link rel="stylesheet" href="css/lista1.css" />
<!-- <link rel="stylesheet" href="css/edades.css" /> -->
<link rel="stylesheet" href="css/formoid-solid-purple.css" />
<script src="js/modernizr.custom.lis.js"></script>
</head>
<body>
<header>
<h1>Calculadora de resistencias y capacitores</h1>
</header>
<section>
<article>
<?php
if(isset($_POST['enviar'])){
$dispositivoTipo = isset($_POST['seltipo']) ? $_POST['seltipo'] : "";
switch($dispositivoTipo){
case "serie":
echo "<form name='frmedades' action='calculoserie.php' method='POST'>";
echo "<fieldset>";
echo "<legend><span>Ingrese el valor de las resistencias:</span></legend>";
echo "<ul>";
echo "<li>";
echo "<label for='edad'>Valores:</label>";
echo "<div class=\"campo\">";
echo "<input type='number' name='edad' id='edad' maxlength='60'>";
echo "<input type='reset' name='agregar' id='agregar' value='Agregar' /><br />";
echo "</div>";
echo "</li>";
echo "<li>";
echo "<div class=\"campo\">";
echo "<select name='ingresados[]' id='ingresados' size='6' multiple='multiple'></select>";
echo "</div>";
echo "</li>";
echo "<li>";
echo "<div class=\"campo\">";
echo "<input type='submit' name='enviar' id='enviar' value='Enviar' class=\"boton\"/>";
echo "</div>";
echo "</li>";
echo "</ul>";
echo "</fieldset>";
echo "</form>";
break;
case "paralelo":
echo "<form name='frmedades' action='calculoparalelo.php' method='POST'>";
echo "<fieldset>";
echo "<legend><span>Ingrese el valor de las resistencias:</span></legend>";
echo "<ul>";
echo "<li>";
echo "<label for='edad'>Valores:</label>";
echo "<div class=\"campo\">";
echo "<input type='number' name='edad' id='edad' maxlength='60'>";
echo "<input type='reset' name='agregar' id='agregar' value='Agregar' /><br />";
echo "</div>";
echo "</li>";
echo "<li>";
echo "<div class=\"campo\">";
echo "<select name='ingresados[]' id='ingresados' size='6' multiple='multiple'></select>";
echo "</div>";
echo "</li>";
echo "<li>";
echo "<div class=\"campo\">";
echo "<input type='submit' name='enviar' id='enviar' value='Enviar' class=\"boton\"/>";
echo "</div>";
echo "</li>";
echo "</ul>";
echo "</fieldset>";
echo "</form>";
break;
}
}
?>
</article>
</section>
</body>
<script src="js/agregar.js"></script>
<script src="js/validatefield.js"></script>
<script src="js/modernizr.custom.lis.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
<script src="js/formoid-solid-purple.js"></script>
</html>
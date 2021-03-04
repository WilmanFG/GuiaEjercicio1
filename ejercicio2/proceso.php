<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/estilophp.css">
</head>
<body>
	<div class="container">
		<?php
		$numero = $_POST['inputNumPrimo'];
		$contadorPrimo = 0;

		for($contador = 1; $contador<=$numero; $contador++){
			if($numero % $contador == 0){
				$contadorPrimo = $contadorPrimo + 1;
			}
		}

		if($numero == 2 or $contadorPrimo == 2){
			echo "El numero ".$numero." es primo porque es divisible por el mismo y (1)" ;
		}
		else
		{
			echo "El numero ".$numero." no es primo porque solo tienen un divisor";
		}
		?>
</div>
<div id="link">
	<a href="pedirdatos.html" class="button-link">Ingresar nuevos datos</a>
</div>

</body>
</html>

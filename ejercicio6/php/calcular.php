
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8" />
<title>Binario</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<h1>Resultado de la conversión</h1>
</header>
<div class="principal">
<h2>
<?php
if(isset($_POST['dec'])){
    $dec = $_POST['dec'];
    $respuesta = array();

    for($i = 0; $i < 20; $i++){
      $b = $dec % 2;
      $respuesta[$i] = $b;
      $dec = intval($dec / 2);
      if($dec == 0) break;
    }
    $N = sizeof($respuesta) - 1;
    for($i = $N; $i >= 0; $i--){
      echo $respuesta[$i];
    }
    
}else{
    echo "Datos incorrectos";
}
?>
</h2>

      <a href="binario.php" class="btn btn-primary">Volver</a>
  </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</html>
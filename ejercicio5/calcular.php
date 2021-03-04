<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8" />
<title>Serie de Fibonacci</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<h1>Serie de Fibonacci</h1>
</header>
<div class="principal">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
    </tr>
  </thead>
  <tbody style="background-color: white;">
    <tr>
      <th scope="row">1</th>
    </tr>
<?php
if(isset($_POST['n1']) && isset($_POST['n2'])){
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
$num1 = 0;
$num2 = 1;
$num3;
for ($i = 0; $i<=$n1; $i++){
    $num3 = $num1 + $num2;
    $num1 = $num2;
    $num2 = $num3;
    if($num3 >= $n2){
        break;
    }else{
        echo "<tr>";
        echo "<th scope='row'>$num3</th>";
        echo "</tr>";
        //echo "$num3 </br>";
    }
}
}else{
    echo "Datos incorrectos";
}
?>
</tbody>
</table>
      <a href="fibonacci.php" class="btn btn-primary">Volver</a>
  </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</html>
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
    <form class="form-control" action="calcular.php" method="POST">
      <div class="form-input-material">
        <label>Ingrese el numero de series:</label>
        <input type="number" name="n1" id="" placeholder="0" class="form-control" required />
      </div>
      <div class="form-input-material">
        <label>Ingrese un número limite:</label>
        <input type="number" name="n2" id="" placeholder="0" class="form-control" required />
      </div>
      <button type="submit" class="btn btn-primary">Calcular</button>
    </form>
  </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</html>
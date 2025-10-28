<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Resultado - Ejercicio 18</title>
  <link rel="stylesheet" href="ejercicio18.css">
</head>
<body>
  <div class="container">
    <h1>Resultado</h1>
    <?php
      $num = $_POST['num'];
      $esPrimo = true;

      if ($num == 1) {
        $esPrimo = false;
      } else {
        for ($i = 2; $i <= sqrt($num); $i++) {
          if ($num % $i == 0) {
            $esPrimo = false;
            break;
          }
        }
      }

      if ($esPrimo) {
        echo "<p>El número <strong>$num</strong> es primo.</p>";
      } else {
        echo "<p>El número <strong>$num</strong> no es primo.</p>";
      }
    ?>
    <a href="ejercicio18.html">Volver</a>
  </div>
</body>
</html>

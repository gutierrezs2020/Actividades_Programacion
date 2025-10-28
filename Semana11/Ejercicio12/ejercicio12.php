<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Resultado - Ejercicio 12</title>
  <link rel="stylesheet" href="ejercicio12.css">
</head>
<body>
  <div class="container">
    <h1>Suma de dígitos</h1>
    <?php
      $num = $_POST['num'];
      $suma = 0;
      $temp = $num;

      while ($temp > 0) {
        $digito = $temp % 10;
        $suma += $digito;
        $temp = intdiv($temp, 10);
      }

      echo "<p>La suma de los dígitos de $num es: <strong>$suma</strong></p>";
    ?>
    <a href="ejercicio12.html">Volver</a>
  </div>
</body>
</html>

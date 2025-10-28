<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Resultado - Ejercicio 2</title>
  <link rel="stylesheet" href="ejercicio2.css">
</head>
<body>
  <div class="container">
    <h1>Resultado</h1>
    <?php
      $suma = 0;
      $i = 1;
      while ($i <= 50) {
        $suma += $i;
        $i++;
      }
      echo "<p>La suma de los primeros 50 números naturales es: <strong>$suma</strong></p>";
    ?>
    <a href="ejercicio2.html">Volver</a>
  </div>
</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Resultado - Ejercicio 20</title>
  <link rel="stylesheet" href="ejercicio20.css">
</head>
<body>
  <div class="container">
    <h1>Números divisibles entre 3</h1>
    <?php
      $contador = 0;
      for ($i = 1; $i <= 100; $i++) {
        if ($i % 3 == 0) {
          $contador++;
        }
      }
      echo "<p>Entre 1 y 100 hay <strong>$contador</strong> números divisibles entre 3.</p>";
    ?>
    <a href="ejercicio20.html">Volver</a>
  </div>
</body>
</html>

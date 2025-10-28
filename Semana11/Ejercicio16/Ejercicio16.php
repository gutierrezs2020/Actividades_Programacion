<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Resultado - Ejercicio 16</title>
  <link rel="stylesheet" href="ejercicio16.css">
</head>
<body>
  <div class="container">
    <h1>Potencias de 2</h1>
    <p>
      <?php
        for ($i = 0; $i <= 10; $i++) {
          $resultado = pow(2, $i);
          echo "2<sup>$i</sup> = $resultado<br>";
        }
      ?>
    </p>
    <a href="ejercicio16.html">Volver</a>
  </div>
</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Resultado - Ejercicio 17</title>
  <link rel="stylesheet" href="ejercicio17.css">
</head>
<body>
  <div class="container">
    <h1>Números Impares</h1>
    <p>
      <?php
        for ($i = 1; $i <= 50; $i += 2) {
          echo $i . " ";
        }
      ?>
    </p>
    <a href="ejercicio17.html">Volver</a>
  </div>
</body>
</html>

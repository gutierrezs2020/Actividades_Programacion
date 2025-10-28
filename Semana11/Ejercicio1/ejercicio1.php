<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Resultado - Ejercicio 1</title>
  <link rel="stylesheet" href="ejercicio1.css">
</head>
<body>
  <div class="container">
    <h1>Números del 1 al 100</h1>
    <p>
      <?php
        for ($i = 1; $i <= 100; $i++) {
          echo $i . " ";
        }
      ?>
    </p>
    <a href="ejercicio1.html">Volver</a>
  </div>
</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Resultado - Ejercicio 19</title>
  <link rel="stylesheet" href="ejercicio19.css">
</head>
<body>
  <div class="container">
    <h1>Asteriscos</h1>
    <p style="font-size: 24px;">
      <?php
        $cantidad = $_POST['cantidad'];
        for ($i = 0; $i < $cantidad; $i++) {
          echo "*";
        }
      ?>
    </p>
    <a href="ejercicio19.html">Volver</a>
  </div>
</body>
</html>

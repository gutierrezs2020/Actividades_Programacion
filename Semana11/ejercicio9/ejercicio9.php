<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Resultado - Ejercicio 9</title>
  <link rel="stylesheet" href="ejercicio9.css">
</head>
<body>
  <div class="container">
    <h1>Números descendentes</h1>
    <p>
    <?php
      for ($i = 100; $i >= 1; $i--) {
        echo $i . " ";
      }
    ?>
    </p>
    <a href="ejercicio9.html">Volver</a>
  </div>
</body>
</html>

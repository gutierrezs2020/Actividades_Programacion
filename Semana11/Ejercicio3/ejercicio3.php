<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Resultado - Ejercicio 3</title>
  <link rel="stylesheet" href="ejercicio3.css">
</head>
<body>
  <div class="container">
    <h1>Tabla de multiplicar</h1>
    <?php
      $n = $_POST['num'];
      for ($i = 1; $i <= 10; $i++) {
        echo "<p>$n x $i = " . ($n * $i) . "</p>";
      }
    ?>
    <a href="ejercicio3.html">Volver</a>
  </div>
</body>
</html>

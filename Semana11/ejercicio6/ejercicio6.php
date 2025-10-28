<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Resultado - Ejercicio 6</title>
  <link rel="stylesheet" href="ejercicio6.css">
</head>
<body>
  <div class="container">
    <h1>Números pares</h1>
    <?php
      $n = $_POST['num'];
      echo "<p>Números pares desde 2 hasta $n:</p>";
      for ($i = 2; $i <= $n; $i += 2) {
        echo $i . " ";
      }
    ?>
    <br><a href="ejercicio6.html">Volver</a>
  </div>
</body>
</html>

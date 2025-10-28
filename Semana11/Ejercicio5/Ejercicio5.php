<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Resultado - Ejercicio 5</title>
  <link rel="stylesheet" href="ejercicio5.css">
</head>
<body>
  <div class="container">
    <h1>Resultado Factorial</h1>
    <?php
      $n = $_POST['num'];
      $fact = 1;
      $i = 1;
      do {
        $fact *= $i;
        $i++;
      } while ($i <= $n);

      echo "<p>El factorial de $n es: <strong>$fact</strong></p>";
    ?>
    <a href="ejercicio5.html">Volver</a>
  </div>
</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Resultado - Ejercicio 8</title>
  <link rel="stylesheet" href="ejercicio8.css">
</head>
<body>
  <div class="container">
    <h1>Múltiplos de 5</h1>
    <?php
      $i = 1;
      while ($i <= 10) {
        echo "<p>" . ($i * 5) . "</p>";
        $i++;
      }
    ?>
    <a href="ejercicio8.html">Volver</a>
  </div>
</body>
</html>

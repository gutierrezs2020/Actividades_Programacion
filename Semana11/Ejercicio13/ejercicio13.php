<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Resultado - Ejercicio 13</title>
  <link rel="stylesheet" href="ejercicio13.css">
</head>
<body>
  <div class="container">
    <h1>Conteo de dígitos</h1>
    <?php
      $num = $_POST['num'];
      $contador = 0;
      $temp = $num;

      do {
        $contador++;
        $temp = intdiv($temp, 10);
      } while ($temp > 0);

      echo "<p>El número $num tiene <strong>$contador</strong> dígitos.</p>";
    ?>
    <a href="ejercicio13.html">Volver</a>
  </div>
</body>
</html>

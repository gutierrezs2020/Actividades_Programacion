<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Resultado - Ejercicio 11</title>
  <link rel="stylesheet" href="ejercicio11.css">
</head>
<body>
  <div class="container">
    <h1>Cuenta regresiva</h1>
    <p>
      <?php
        $n = $_POST['num'];
        for ($i = $n; $i >= 0; $i--) {
          echo $i . " ";
        }
      ?>
    </p>
    <a href="ejercicio11.html">Volver</a>
  </div>
</body>
</html>

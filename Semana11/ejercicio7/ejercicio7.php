<?php
session_start();

if (!isset($_SESSION['contador'])) {
  $_SESSION['contador'] = 0;
}

$num = $_POST['num'];

if ($num != 0) {
  $_SESSION['contador']++;
  header("Location: ejercicio7.html");
  exit;
} else {
  $cantidad = $_SESSION['contador'];
  session_destroy();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Resultado - Ejercicio 7</title>
  <link rel="stylesheet" href="ejercicio7.css">
</head>
<body>
  <div class="container">
    <h1>Resultado</h1>
    <p>Has ingresado <strong><?php echo $cantidad; ?></strong> números antes de escribir 0.</p>
    <a href="ejercicio7.html">Reiniciar</a>
  </div>
</body>
</html>

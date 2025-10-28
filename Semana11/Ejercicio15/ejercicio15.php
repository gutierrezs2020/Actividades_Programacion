<?php
session_start();

if (!isset($_SESSION['contador'])) {
  $_SESSION['contador'] = 0;
}

$letra = strtoupper($_POST['letra']);

if ($letra !== "S") {
  $_SESSION['contador']++;
  header("Location: ejercicio15.html");
  exit;
} else {
  $intentos = $_SESSION['contador'];
  session_destroy();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Resultado - Ejercicio 15</title>
  <link rel="stylesheet" href="ejercicio15.css">
</head>
<body>
  <div class="container">
    <h1>Final del proceso</h1>
    <p>Has ingresado <strong><?= $intentos ?></strong> letras antes de escribir "S".</p>
    <a href="ejercicio15.html">Volver</a>
  </div>
</body>
</html>

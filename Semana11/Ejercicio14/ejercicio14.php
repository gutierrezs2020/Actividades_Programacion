<?php
session_start();

if (!isset($_SESSION['notas'])) {
  $_SESSION['notas'] = [];
}

$nota = $_POST['nota'];

if ($nota != -1) {
  $_SESSION['notas'][] = $nota;
  header("Location: ejercicio14.html");
  exit;
} else {
  $total = count($_SESSION['notas']);
  if ($total > 0) {
    $promedio = array_sum($_SESSION['notas']) / $total;
  } else {
    $promedio = 0;
  }
  session_destroy();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Resultado - Ejercicio 14</title>
  <link rel="stylesheet" href="ejercicio14.css">
</head>
<body>
  <div class="container">
    <h1>Promedio de calificaciones</h1>
    <p>Ingresaste <strong><?= $total ?></strong> calificaciones.</p>
    <p>El promedio es: <strong><?= number_format($promedio, 2) ?></strong></p>
    <a href="ejercicio14.html">Reiniciar</a>
  </div>
</body>
</html>

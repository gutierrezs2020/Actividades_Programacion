<?php
session_start();

$clave_correcta = "1234";

if (!isset($_SESSION['intentos'])) {
  $_SESSION['intentos'] = 0;
}

$clave = $_POST['clave'];

if ($clave === $clave_correcta) {
  session_destroy();
  $mensaje = "✅ Contraseña correcta. Bienvenido.";
  $color = "green";
} else {
  $_SESSION['intentos']++;
  $mensaje = "❌ Contraseña incorrecta. Intente nuevamente.";
  $color = "red";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Resultado - Ejercicio 10</title>
  <link rel="stylesheet" href="ejercicio10.css">
</head>
<body>
  <div class="container">
    <h1>Validación de contraseña</h1>
    <p style="color: <?= $color ?>;"><?= $mensaje ?></p>
    <?php if ($color === "red"): ?>
      <p>Intentos fallidos: <?= $_SESSION['intentos'] ?></p>
      <a href="ejercicio10.html">Volver a intentar</a>
    <?php else: ?>
      <a href="ejercicio10.html">Volver al inicio</a>
    <?php endif; ?>
  </div>
</body>
</html>

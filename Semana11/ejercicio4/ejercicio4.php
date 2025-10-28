<?php
session_start();

if (!isset($_SESSION['numeros'])) {
  $_SESSION['numeros'] = [];
}

$num = $_POST['num'];
if ($num >= 0) {
  $_SESSION['numeros'][] = $num;
  header("Location: ejercicio4.html");
  exit;
} else {
  $total = count($_SESSION['numeros']);
  $lista = implode(", ", $_SESSION['numeros']);
  session_destroy();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Resultado - Ejercicio 4</title>
  <link rel="stylesheet" href="ejercicio4.css">
</head>
<body>
  <div class="container">
    <h1>Resultado</h1>
    <p>Números ingresados: <?php echo $lista; ?></p>
    <p>Total de números positivos ingresados: <strong><?php echo $total; ?></strong></p>
    <a href="ejercicio4.html">Reiniciar</a>
  </div>
</body>
</html>

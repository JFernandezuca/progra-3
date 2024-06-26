<?php
session_start();

// Incrementar el contador de visitas
if(isset($_SESSION['visitas'])) {
    $_SESSION['visitas']++;
} else {
    $_SESSION['visitas'] = 1;
}

// Mostrar el contador de visitas
$visitas = $_SESSION['visitas'];


// Da el ejemplo que nunca pasa de uno si se hace de forma convencional
$visitas2 = 21;

echo $visitas2++;

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de Visitas</title>
</head>
<body>
    <h1>Bienvenido</h1>
    <p>Esta página ha sido visitada <?php echo $visitas; ?> veces.</p>
</body>
</html>

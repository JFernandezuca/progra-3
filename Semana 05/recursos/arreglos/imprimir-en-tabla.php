<?php
// Datos de ejemplo
$datos_contacto = [
    ["Juan", "juan@example.com", "123-456-7890"],
    ["Ana", "ana@example.com", "234-567-8901"],
    ["Luis", "luis@example.com", "345-678-9012"]
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contactos</title>
</head>
<body>
    <h1>Contactos</h1>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Teléfono</th>
            </tr>
        </thead>
        <tbody>

        
            <?php foreach ($datos_contacto as $contacto) : ?>
                <tr>
                    <td><?= $contacto[0] ?></td>
                    <td><?= $contacto[1] ?></td>
                    <td><?= $contacto[2] ?></td>
                </tr>
            <?php endforeach; ?>



        </tbody>
    </table>
</body>
</html>

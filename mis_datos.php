<?php
// Autor: Gabriel Claro
include 'datos.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>PRÉSTAME - Mis datos</title>
   <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
   <h1>PRÉSTAME</h1>
   <a href="index.php">Inicio</a> |
   <a href="publicar.php">Publicar objeto</a> |
   <a href="mis_objetos.php">Mis objetos</a> |
   <a href="mis_datos.php">Mis datos</a> |
   <a href="login.php">Iniciar sesión</a>
   <hr>

   <h2>Mis datos</h2>
   <p>Nombre: <?php echo $nombre; ?></p>
   <p>Correo: <?php echo $correo; ?></p>
   <p>Teléfono: <?php echo $telefono; ?></p>

   <a href="login.php">Cerrar sesión</a>
</body>
</html>

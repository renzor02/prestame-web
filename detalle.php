<?php
// Autor: Gabriel Claro
include 'datos.php';

$id = $_GET["id"] ?? 1;

foreach($objetos as $o){
  if($o["id"] == $id){
    $objeto = $o;
  }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PRÉSTAME - Detalle</title>
  <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
  <H1>PRÉSTAME</H1>
  <a href="index.php">Inicio</a> |
  <a href="publicar.php">Publicar objeto</a> |
  <a href="mis_objetos.php">Mis objetos</a> |
  <a href="mis_datos.php">Mis datos</a> |
  <a href="login.php">Iniciar sesión</a>
  <hr>

  <h2><?php echo $objeto["nombre"]; ?></h2>
  <p>Categoría: <?php echo $objeto["categoria"]; ?></p>
  <p>Ubicación: <?php echo $objeto["ubicacion"]; ?></p>
  <p>Precio por día: ₡<?php echo $objeto["precio"]; ?></p>

  <h3>Datos del propietario</h3>
  <p>Nombre: <?php echo $objeto["propietario"]; ?></p>
  <p>Teléfono: <?php echo $objeto["telefono"]; ?></p>

  <a href="index.php">Volver</a>
</body>
</html>

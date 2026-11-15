<?php
// Autor: Gabriel Claro
include 'datos.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRÉSTAME - Mis objetos</title>
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

    <h2>Mis objetos</h2>
    <br>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Categoría</th>
            <th>Precio</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
        <?php
        foreach($objetos as $o){
            if($o["propietario"] == $nombre){
                $estado = ($o["disponible"]) ? "Disponible" : "No disponible";

                echo "<tr>";
                echo "<td>" . $o["nombre"] . "</td>";
                echo "<td>" . $o["categoria"] . "</td>";
                echo "<td>₡" . $o["precio"] . "</td>";
                echo "<td>" . $estado . "</td>";
                echo "<td><a href='publicar.php'>Editar</a> | <a href='#'>Cambiar disponibilidad</a> | <a href='#' onclick=\"return confirm('Seguro que quiere eliminar?')\">Eliminar</a></td>";
                echo "</tr>";
            }
        }
        ?>
    </table>
</body>
</html>

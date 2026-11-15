<?php
// Autor: Gabriel Claro
include 'datos.php';

$categoria = $_GET["categoria"] ?? "";
$ubicacion = $_GET["ubicacion"] ?? "";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRÉSTAME - Inicio</title>
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

    <h2>Buscar objetos</h2>
    <form action="index.php" method="GET">
        <label>Categoría:</label>
        <select name="categoria">
            <option value="">Todas</option>
            <?php foreach($categorias as $c){ ?>
              <option value="<?php echo $c; ?>"><?php echo $c; ?></option>
            <?php } ?>
        </select>
        <label>Ubicación:</label>
        <select name="ubicacion">
            <option value="">Todas</option>
            <?php foreach($ubicaciones as $u){ ?>
                <option value="<?php echo $u; ?>"><?php echo $u; ?></option>
            <?php } ?>
        </select>
          <button type="submit">Buscar</button>
    </form>
    <br>

    <h2>Objetos disponibles</h2>

    <?php
    foreach($objetos as $o){
        if(($categoria == "" || $categoria == $o["categoria"]) && ($ubicacion == "" || $ubicacion == $o["ubicacion"])){
            $estado = ($o["disponible"]) ? "Disponible" : "No disponible";

          echo '<div class="tarjeta">';
          echo "<h3>" . $o["nombre"] . "</h3>";
          echo "<p>" . $o["categoria"] . " - " . $o["ubicacion"] . "</p>";
            echo "<p>Precio por día: ₡" . $o["precio"] . "</p>";
            echo "<p>" . $estado . "</p>";
            echo "<a href='detalle.php?id=" . $o["id"] . "'>Ver detalle</a>";
            echo "</div>";
        }
    }
    ?>
</body>
</html>

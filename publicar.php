<?php
// Autor: Gabriel Claro
include 'datos.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PRÉSTAME - Publicar objeto</title>
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

	<div class="container">
		<h2>Publicar objeto</h2>
		<form action="mis_objetos.php" method="POST">
			<div class="form-group">
				<label for="nombre">Nombre del objeto:</label>
				<input type="text" id="nombre" name="nombre" required>
			</div>
			<div class="form-group">
			    <label for="categoria">Categoría:</label>
			    <select id="categoria" name="categoria">
			        <?php foreach($categorias as $c){ ?>
			            <option value="<?php echo $c; ?>"><?php echo $c; ?></option>
			        <?php } ?>
			    </select>
			</div>
			<div class="form-group">
				<label for="ubicacion">Ubicación:</label>
				<select id="ubicacion" name="ubicacion">
					<?php foreach($ubicaciones as $u){ ?>
						<option value="<?php echo $u; ?>"><?php echo $u; ?></option>
					<?php } ?>
				</select>
			</div>
			<div class="form-group">
				<label for="precio">Precio por día:</label>
				<input type="number" id="precio" name="precio" required>
			</div>
			<button type="submit" class="btn">Publicar</button>
		</form>
	</div>
</body>
</html>

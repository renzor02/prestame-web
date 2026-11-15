<!DOCTYPE html>
<html lang="es">
<!-- Autor: Gabriel Claro -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRÉSTAME - Iniciar Sesión</title>
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
        <h2>Iniciar Sesión - PRÉSTAME</h2>
        <form action="api/login.php" method="POST">
            <div class="form-group">
                <label for="correo">Correo Electrónico:</label>
                <input type="email" id="correo" name="correo" required>
            </div>
            <div class="form-group">
                <label for="contrasena">Contraseña:</label>
                <input type="password" id="contrasena" name="contrasena" required>
            </div>
            <button type="submit" class="btn">Entrar</button>
        </form>
        <p>¿No tienes cuenta? <a href="registrar.php">Regístrate aquí</a></p>
    </div>
</body>
</html>
<?php
include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    // Encriptamos la contraseña por seguridad
    $contrasena = password_hash($_POST['contrasena'], PASSWORD_BCRYPT);

    try {
        $sql = "INSERT INTO usuarios (nombre, correo, telefono, contrasena) VALUES (:nombre, :correo, :telefono, :contrasena)";
        $stmt = $conexion->prepare($sql);
        $stmt->execute([
            'nombre' => $nombre,
            'correo' => $correo,
            'telefono' => $telefono,
            'contrasena' => $contrasena
        ]);

        // Redirigir al login tras un registro exitoso
        header("Location: ../login.php?registro=exitoso");
        exit();
    } catch (PDOException $e) {
        echo "Error al registrar el usuario: " . $e->getMessage();
    }
}
?>
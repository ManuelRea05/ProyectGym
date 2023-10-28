<?php
// Incluye el archivo de conexión
include("conexion.php");

if (isset($_POST['contact'])) {
    if (
        isset($_POST['nombre']) && !empty($_POST['nombre']) &&
        isset($_POST['email']) && !empty($_POST['email']) &&
        isset($_POST['mensaje']) && !empty($_POST['mensaje'])
    ) {
        $nombre = trim($_POST['nombre']);
        $email = trim($_POST['email']);
        $mensaje = trim($_POST['mensaje']);
        $fecha = date("Y-m-d H:i:s"); // Cambié el formato de la fecha para que sea compatible con MySQL.

        // Verifica la conexión a la base de datos
        if ($conex->connect_error) {
            die("Error de conexión: " . $conex->connect_error);
        }

        $consulta = "INSERT INTO contacto (email, nombre, mensaje, fecha_registro) VALUES ('$email', '$nombre', '$mensaje', '$fecha')";
        $resultado = $conex->query($consulta); // Cambié mysqli_query a $conex->query

        if ($resultado) {
            echo "<h3 class='success'>Tu registro se ha completado</h3>";
        } else {
            echo "<h3 class='error'>Ocurrió un error: " . $conex->error . "</h3>";
        }

        // Cierra la conexión
        $conex->close();
    } else {
        echo "<h3 class='error'>Llena todos los campos</h3>";
    }
}
?>


<?php
// Establece la conexión con la base de datos
$conex = new mysqli("localhost", "root", "", "proyectgym");

if ($conex->connect_error) {
    die("Error de conexión: " . $conex->connect_error);
}
?>

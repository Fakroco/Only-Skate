<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "usuarios";

// Crear conexión
$conn = new mysqli($server, $user, $pass, $db);

// Verificar la conexión
if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
} else {
    echo "conectado";
}
?>

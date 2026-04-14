<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "sistema_archivo_db";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Opcional: configurar charset
$conn->set_charset("utf8");
?>

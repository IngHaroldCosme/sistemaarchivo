<?php
session_start();
include("../config/conexion.php");

if (isset($_POST['login'])) {

    $user = $_POST['username'];
    $pass = $_POST['password'];

    $sql = "SELECT * FROM usuario WHERE username='$user' AND password='$pass'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['usuario'] = $user;
        header("Location: ../dashboard.php");
    } else {
        echo "Usuario o contraseña incorrectos";
    }
}
?>

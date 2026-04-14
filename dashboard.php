<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
}
?>

<?php include("views/layouts/header.php"); ?>

<h2>Bienvenido <?php echo $_SESSION['usuario']; ?></h2>

<?php
include("config/conexion.php");

$hoy = date("Y-m-d");

$sql = "SELECT * FROM prestamo 
        WHERE fecha_vencimiento < '$hoy' AND estado='PENDIENTE'";

$res = $conn->query($sql);

if ($res->num_rows > 0) {
    echo "<h3 style='color:red;'>⚠ Hay préstamos vencidos</h3>";
}
?>

<div class="container">

    <h2>Bienvenido <?php echo $_SESSION['usuario']; ?></h2>

    <div class="card">
        <h3>Gestión de Carpetas</h3>
        <ul>
            <li><a href="views/carpeta/registrar.php">Registrar Carpeta</a></li>
            <li><a href="views/carpeta/listar.php">Listar Carpetas</a></li>
            <li><a href="views/prestamo/registrar.php">Registrar Préstamo</a></li>
            <li><a href="views/prestamo/listar.php">Listar Préstamos</a></li>
        </ul>
    </div>

    <div class="card">
        <h3>Reportes</h3>
        <ul>
            <li><a href="views/reportes/prestamos_dependencia.php">Reporte por Dependencia</a></li>
            <li><a href="views/reportes/vencidos.php">Carpetas Vencidas</a></li>
        </ul>
    </div>

</div>


<div class="container"></div>


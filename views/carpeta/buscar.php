<?php include("../layouts/header.php"); ?>

<h2>Buscar Carpeta</h2>

<form method="GET">
    <input type="text" name="buscar" placeholder="Número de carpeta">
    <button type="submit">Buscar</button>
</form>

<?php
include("../../config/conexion.php");

if (isset($_GET['buscar'])) {
    $num = $_GET['buscar'];

    $sql = "SELECT * FROM carpeta_fiscal WHERE numero_carpeta='$num'";
    $res = $conn->query($sql);

    if ($res->num_rows > 0) {
        $row = $res->fetch_assoc();
        echo "<p>Ubicación: " . $row['ubicacion'] . "</p>";
        echo "<p>Estado: " . $row['estado'] . "</p>";
    } else {
        echo "<p>No ubicado</p>";
    }
}
?>

<?php include("../layouts/footer.php"); ?>

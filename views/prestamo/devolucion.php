<?php
include("../../config/conexion.php");
include("../layouts/header.php");

$id = $_GET['id'];

$sql = "SELECT p.*, d.nombre 
        FROM prestamo p
        JOIN dependencia d ON p.dependencia_id = d.id
        WHERE p.id = $id";

$res = $conn->query($sql);
$row = $res->fetch_assoc();
?>

<div class="container">

    <div class="card">

        <h2>📄 Nota de Devolución</h2>

        <p><strong>Guía:</strong> <?php echo $row['numero_guia']; ?></p>
        <p><strong>Dependencia:</strong> <?php echo $row['nombre']; ?></p>
        <p><strong>Fecha Préstamo:</strong> <?php echo $row['fecha_prestamo']; ?></p>
        <p><strong>Fecha Vencimiento:</strong> <?php echo $row['fecha_vencimiento']; ?></p>

        <hr>

        <p style="color:red;">
            Se solicita la devolución inmediata de las carpetas fiscales debido al vencimiento del plazo establecido.
        </p>

    </div>

</div>

<?php include("../layouts/footer.php"); ?>

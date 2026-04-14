<?php
include("../../config/conexion.php");
include("../layouts/header.php");

$sql = "SELECT d.nombre, COUNT(dp.id) as total
        FROM detalle_prestamo dp
        JOIN prestamo p ON dp.prestamo_id = p.id
        JOIN dependencia d ON p.dependencia_id = d.id
        GROUP BY d.nombre";

$res = $conn->query($sql);
?>

<h2>Reporte: Carpetas por Dependencia</h2>

<table border="1" width="100%" cellpadding="10">
<tr>
    <th>Dependencia</th>
    <th>Total Carpetas</th>
</tr>

<?php while($r = $res->fetch_assoc()) { ?>
<tr>
    <td><?php echo $r['nombre']; ?></td>
    <td><?php echo $r['total']; ?></td>
</tr>
<?php } ?>

</table>

<?php include("../layouts/footer.php"); ?>

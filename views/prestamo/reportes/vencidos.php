<?php
include("../../config/conexion.php");
include("../layouts/header.php");

$hoy = date("Y-m-d");

$sql = "SELECT p.numero_guia, d.nombre, p.fecha_vencimiento
        FROM prestamo p
        JOIN dependencia d ON p.dependencia_id = d.id
        WHERE p.fecha_vencimiento < '$hoy'";

$res = $conn->query($sql);
?>

<h2>Carpetas Vencidas</h2>

<table border="1" width="100%" cellpadding="10">
<tr>
    <th>Guía</th>
    <th>Dependencia</th>
    <th>Vencimiento</th>
</tr>

<?php while($r = $res->fetch_assoc()) { ?>
<tr style="color:red;">
    <td><?php echo $r['numero_guia']; ?></td>
    <td><?php echo $r['nombre']; ?></td>
    <td><?php echo $r['fecha_vencimiento']; ?></td>
</tr>
<?php } ?>

</table>

<?php include("../layouts/footer.php"); ?>

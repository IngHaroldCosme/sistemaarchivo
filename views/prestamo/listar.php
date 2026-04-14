<?php
include("../../config/conexion.php");
include("../layouts/header.php");

$sql = "SELECT p.*, d.nombre 
        FROM prestamo p
        JOIN dependencia d ON p.dependencia_id = d.id";

$res = $conn->query($sql);
?>

<h2>Lista de Préstamos</h2>

<table border="1" width="100%" cellpadding="10">
<tr>
    <th>Guía</th>
    <th>Dependencia</th>
    <th>Fecha</th>
    <th>Vencimiento</th>
    <th>Estado</th>
</tr>

<?php while($r = $res->fetch_assoc()) { ?>
<tr>
    <td><?php echo $r['numero_guia']; ?></td>
    <td><?php echo $r['nombre']; ?></td>
    <td><?php echo $r['fecha_prestamo']; ?></td>
    <td><?php echo $r['fecha_vencimiento']; ?></td>
    <td><?php echo $r['estado']; ?></td>
</tr>
<?php } ?>

</table>

<?php include("../layouts/footer.php"); ?>

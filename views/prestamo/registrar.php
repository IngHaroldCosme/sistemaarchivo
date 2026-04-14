<?php
include("../../config/conexion.php");
include("../layouts/header.php");

// obtener carpetas
$carpetas = $conn->query("SELECT * FROM carpeta_fiscal");

// obtener dependencias
$deps = $conn->query("SELECT * FROM dependencia");
?>

<h2>Registrar Préstamo</h2>

<form action="../../controllers/PrestamoController.php" method="POST">

    <label>Dependencia:</label>
    <select name="dependencia">
        <?php while($d = $deps->fetch_assoc()) { ?>
            <option value="<?php echo $d['id']; ?>">
                <?php echo $d['nombre']; ?>
            </option>
        <?php } ?>
    </select>

    <br><br>

    <label>Seleccionar Carpetas:</label><br>

    <?php while($c = $carpetas->fetch_assoc()) { ?>
        <input type="checkbox" name="carpetas[]" value="<?php echo $c['id']; ?>">
        <?php echo $c['numero_carpeta']; ?> <br>
    <?php } ?>

    <br>

    <label>Días de préstamo:</label>
    <input type="number" name="dias" value="7">

    <br><br>

    <button type="submit" name="guardar">Generar Préstamo</button>
</form>

<?php include("../layouts/footer.php"); ?>

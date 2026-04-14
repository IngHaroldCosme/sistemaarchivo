<?php
include("../../config/conexion.php");
include("../layouts/header.php");

$buscar = "";

if (isset($_GET['buscar'])) {
    $buscar = $_GET['buscar'];
    $sql = "SELECT * FROM carpeta_fiscal WHERE numero_carpeta='$buscar'";
} else {
    $sql = "SELECT * FROM carpeta_fiscal";
}

$result = $conn->query($sql);
?>

<div class="container">

    <h2>Lista de Carpetas</h2>

    <!-- BUSCADOR -->
    <div class="card">
        <form method="GET">
            <input type="text" name="buscar" placeholder="Buscar por número de carpeta" value="<?php echo $buscar; ?>">
            <button type="submit">Buscar</button>
        </form>
    </div>

    <!-- RESULTADOS -->
    <div class="card">

        <table>
            <tr>
                <th>N°</th>
                <th>Imputado</th>
                <th>Delito</th>
                <th>Agraviado</th>
                <th>Estado</th>
                <th>Ubicación</th>
            </tr>

            <?php 
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $row['numero_carpeta']; ?></td>
                    <td><?php echo $row['imputado']; ?></td>
                    <td><?php echo $row['delito']; ?></td>
                    <td><?php echo $row['agraviado']; ?></td>
                    <td><?php echo $row['estado']; ?></td>
                    <td><?php echo $row['ubicacion']; ?></td>
                </tr>
            <?php } 
            } else { ?>
                <tr>
                    <td colspan="6" style="text-align:center; color:red;">
                        No ubicado
                    </td>
                </tr>
            <?php } ?>

        </table>

    </div>

</div>

<?php include("../layouts/footer.php"); ?>

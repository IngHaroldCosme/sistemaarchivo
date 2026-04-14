<?php include("../layouts/header.php"); ?>

<div class="container">

    <h2>Registrar Carpeta Fiscal</h2>

    <!-- IMPORTAR EXCEL -->
    <div class="card">
        <h3>📥 Importar desde Excel</h3>

        <p>Formato: numero_carpeta | imputado | delito | agraviado | estado | ubicacion</p>

        <form action="../../controllers/CarpetaController.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="archivo" required>
            <button type="submit" name="importar">Importar Excel</button>
        </form>
    </div>

    <!-- REGISTRO MANUAL -->
    <div class="card">
        <h3>📝 Registro Manual</h3>

        <form action="../../controllers/CarpetaController.php" method="POST" class="form-box">

            <input type="text" name="numero" placeholder="Número de carpeta" required>
            <input type="text" name="imputado" placeholder="Imputado" required>
            <input type="text" name="delito" placeholder="Delito" required>
            <input type="text" name="agraviado" placeholder="Agraviado" required>
            <input type="text" name="estado" placeholder="Estado" required>
            <input type="text" name="ubicacion" placeholder="Ubicación" required>

            <button type="submit" name="guardar">Guardar</button>
        </form>

    </div>

</div>

<?php include("../layouts/footer.php"); ?>

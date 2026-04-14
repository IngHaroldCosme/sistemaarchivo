<?php include("../layouts/header.php"); ?>

<div class="container">

    <h2>📥 Importar Carpetas desde Excel</h2>

    <div class="card">

        <p><strong>Formato requerido:</strong></p>
        <p>numero_carpeta | imputado | delito | agraviado | estado | ubicacion</p>

        <form action="../../controllers/CarpetaController.php" method="POST" enctype="multipart/form-data" class="form-box">
            
            <label>Seleccionar archivo Excel:</label>
            <input type="file" name="archivo" required>

            <button type="submit" name="importar">Importar</button>
        </form>

    </div>

</div>

<?php include("../layouts/footer.php"); ?>

<?php include("views/layouts/header.php"); ?>

<div class="form-box">
    <h2>Iniciar Sesión</h2>

    <form action="controllers/UsuarioController.php" method="POST">
        <input type="text" name="username" placeholder="Usuario" required>
        <input type="password" name="password" placeholder="Contraseña" required>
        <button type="submit" name="login">Ingresar</button>
    </form>
</div>

<?php include("views/layouts/footer.php"); ?>

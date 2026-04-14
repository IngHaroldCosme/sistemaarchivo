<?php
include("../config/conexion.php");

if (isset($_POST['guardar'])) {

    $numero = trim($_POST['numero']);

    if (empty($numero)) {
        die("El número de carpeta es obligatorio");
    }

    $imputado = $_POST['imputado'];
    $delito = $_POST['delito'];
    $agraviado = $_POST['agraviado'];
    $estado = $_POST['estado'];
    $ubicacion = $_POST['ubicacion'];

    // Validar duplicado
    $verificar = "SELECT * FROM carpeta_fiscal WHERE numero_carpeta='$numero'";
    $res = $conn->query($verificar);

    if ($res->num_rows > 0) {
        echo "Error: Número de carpeta ya existe";
    } else {
        $sql = "INSERT INTO carpeta_fiscal 
        (numero_carpeta, imputado, delito, agraviado, estado, ubicacion)
        VALUES ('$numero','$imputado','$delito','$agraviado','$estado','$ubicacion')";

        if ($conn->query($sql)) {
            header("Location: ../views/carpeta/listar.php");
        } else {
            echo "Error al guardar";
        }
    }
}
?>
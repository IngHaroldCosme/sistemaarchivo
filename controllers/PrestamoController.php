<?php
include("../config/conexion.php");

if (isset($_POST['guardar'])) {

    // ✅ VALIDACIÓN AQUÍ
    if (!isset($_POST['carpetas'])) {
        die("Debe seleccionar al menos una carpeta");
    }

    $dependencia = $_POST['dependencia'];
    $carpetas = $_POST['carpetas'];
    $dias = $_POST['dias'];

    $fecha = date("Y-m-d");
    $vencimiento = date("Y-m-d", strtotime("+$dias days"));

    // generar guía única
    $guia = "PREST-" . rand(100,999);

    // insertar préstamo
    $sql = "INSERT INTO prestamo (numero_guia, dependencia_id, fecha_prestamo, fecha_vencimiento)
            VALUES ('$guia', '$dependencia', '$fecha', '$vencimiento')";

    if ($conn->query($sql)) {

        $prestamo_id = $conn->insert_id;

        foreach ($carpetas as $c) {
            $conn->query("INSERT INTO detalle_prestamo (prestamo_id, carpeta_id)
                          VALUES ($prestamo_id, $c)");
        }

        echo "Préstamo generado con guía: $guia";
    } else {
        echo "Error en préstamo";
    }
}
?>

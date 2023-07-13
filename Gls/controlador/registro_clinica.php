<?php
include "modelo/conexion.php";

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nombre_clinica"]) && !empty($_POST["direccion"]) && !empty($_POST["folio"])) {
        $nombreClinica = $_POST["nombre_clinica"];
        $direccion = $_POST["direccion"];
        $folio = $_POST["folio"];

        $sql = $conexion->query("INSERT INTO `clinica` (`Nombre_clinica`, `Direccion`, `N°folio`) VALUES ('$nombreClinica', '$direccion', '$folio')");

        if ($sql == 1) {
            echo "<div class='alert alert-success'>Clínica registrada correctamente</div>";
        } else {
            echo "<div class='alert alert-danger'>Error al registrar clínica</div>";
        }
    } else {
        echo "<div class='alert alert-warning'>Algunos de los campos están vacíos</div>";
    }
}
?>

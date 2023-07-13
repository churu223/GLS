<?php
if (!empty($_POST["btnmodificar"])) {
    if (!empty($_POST["nombre_clinica"]) && !empty($_POST["direccion"]) && !empty($_POST["folio"])) {
        $id = $_POST["id"];
        $nombreClinica = $_POST["nombre_clinica"];
        $direccion = $_POST["direccion"];
        $folio = $_POST["folio"];

        $sql = $conexion->query("UPDATE `clinica` SET `Nombre_clinica` = '$nombreClinica', `Direccion` = '$direccion', `N°folio` = '$folio' WHERE `ID_clinica` = $id");

        if ($sql == 1) {
            header("location: Registrar_clinica.php");
            exit();
        } else {
            echo "<div class='alert alert-danger'>Error al modificar clínica</div>";
        }
    } else {
        echo "<div class='alert alert-warning'>Algunos de los campos están vacíos</div>";
    }
}
?>

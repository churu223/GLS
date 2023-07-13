<?php
if (!empty($_POST["btnmodificar"])) {
    if (!empty($_POST["descripcion"]) && !empty($_POST["precio"])) {
        $id = $_POST["id"];
        $descripcion = $_POST["descripcion"];
        $precio = $_POST["precio"];

        $sql = $conexion->query("UPDATE `prestaciones` SET `Descripcion` = '$descripcion', `Precio` = $precio WHERE `ID_Prestaciones` = $id");

        if ($sql == 1) {
            header("location: Registrar_prestaciones.php");
            exit();
        } else {
            echo "<div class='alert alert-danger'>Error al modificar la prestación</div>";
        }
    } else {
        echo "<div class='alert alert-warning'>Algunos de los campos están vacíos</div>";
    }
}

?>
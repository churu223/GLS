<?php
if (!empty($_POST["btnmodificar"])) {
    if (!empty($_POST["nombre"]) && !empty($_POST["categorizacion"]) && !empty($_POST["descripcion"])) {
        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $categorizacion = $_POST["categorizacion"];
        $descripcion = $_POST["descripcion"];

        $sql = $conexion->query("UPDATE `tipo_operacion` SET `Nombre_Tipo_Operacion` = '$nombre', `Categorizacion_Operacion` = '$categorizacion', `Descripcion` = '$descripcion' WHERE `ID_Tipo_Operacion` = $id");

        if ($sql == 1) {
            header("location: Registrar_tipo_operacion.php");
            exit();
        } else {
            echo "<div class='alert alert-danger'>Error al modificar el tipo de operación</div>";
        }
    } else {
        echo "<div class='alert alert-warning'>Algunos de los campos están vacíos</div>";
    }
}
?>
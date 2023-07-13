<?php
include "modelo/conexion.php";

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nombre_tipo_operacion"]) && !empty($_POST["categorizacion_operacion"]) && !empty($_POST["descripcion"])) {
        $nombreTipoOperacion = $_POST["nombre_tipo_operacion"];
        $categorizacionOperacion = $_POST["categorizacion_operacion"];
        $descripcion = $_POST["descripcion"];

        $sql = $conexion->query("INSERT INTO `tipo_operacion` (`ID_Tipo_Operacion`, `Nombre_Tipo_Operacion`, `Categorizacion_Operacion`, `Descripcion`) VALUES (NULL, '$nombreTipoOperacion', '$categorizacionOperacion', '$descripcion')");

        if ($sql == 1) {
            echo "<div class='alert alert-success'>Tipo de operación registrado correctamente</div>";
        } else {
            echo "<div class='alert alert-danger'>Error al registrar el tipo de operación</div>";
        }
    } else {
        echo "<div class='alert alert-warning'>Por favor, completa todos los campos</div>";
    }
}
?>

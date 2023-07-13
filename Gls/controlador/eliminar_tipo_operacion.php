<?php
if (!empty($_GET["id"])) {
    $id = $_GET["id"];
    $sql = $conexion->query("DELETE FROM `tipo_operacion` WHERE `ID_Tipo_Operacion` = $id");
    if ($sql == 1) {
        echo "<div class='alert alert-success'>Tipo de operación eliminado correctamente</div>";
    } else {
        echo "<div class='alert alert-danger'>Error al eliminar el tipo de operación</div>";
    }
}
?>
<?php
if (!empty($_GET["id"])) {
    $id = $_GET["id"];
    $sql = $conexion->query("DELETE FROM `operacion` WHERE `ID_operacion` = $id");
    if ($sql == 1) {
        echo "<div class='alert alert-success'>Operación eliminada correctamente</div>";
    } else {
        echo "<div class='alert alert-danger'>Error al eliminar la operación</div>";
    }
}
?>

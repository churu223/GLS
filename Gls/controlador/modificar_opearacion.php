<?php
if (!empty($_POST["btnmodificar"])) {
    if (!empty($_POST["descripcion"]) && !empty($_POST["nombre_operacion"]) && !empty($_POST["fecha_operacion"]) && !empty($_POST["folio"]) && !empty($_POST["id_prestaciones"]) && !empty($_POST["id_paciente"]) && !empty($_POST["id_medicos"]) && !empty($_POST["id_tipo_operacion"]) && !empty($_POST["id_clinica"])) {
        $id = $_POST["id"];
        $nombre_operacion = $_POST["nombre_operacion"];
        $fecha_operacion = $_POST["fecha_operacion"];
        $folio = $_POST["folio"];
        $descripcion = $_POST["descripcion"];
        $id_prestaciones = $_POST["id_prestaciones"];
        $id_paciente = $_POST["id_paciente"];
        $id_medicos = $_POST["id_medicos"];
        $id_tipo_operacion = $_POST["id_tipo_operacion"];
        $id_clinica = $_POST["id_clinica"];

        $sql = $conexion->query("UPDATE `operacion` SET `Nombre_operacion` = '$nombre_operacion', `Fecha_operacion` = '$fecha_operacion', `N_folio` = '$folio', `descripcion` = '$descripcion', `ID_prestaciones` = $id_prestaciones, `ID_paciente` = $id_paciente, `ID_medicos` = $id_medicos, `ID_Tipo_operacion` = $id_tipo_operacion, `ID_Clinica` = $id_clinica WHERE `ID_operacion` = $id");

        if ($sql == 1) {
            header("location: Registro_operacion.php");
            exit();
        } else {
            echo "<div class='alert alert-danger'>Error al modificar la operación</div>";
        }
    } else {
        echo "<div class='alert alert-warning'>Algunos de los campos están vacíos</div>";
    }
}
?>

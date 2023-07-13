<?php
if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nombre_operacion"]) && !empty($_POST["fecha_operacion"]) && !empty($_POST["folio"]) && !empty($_POST["descripcion"]) && !empty($_POST["id_prestaciones"]) && !empty($_POST["id_paciente"]) && !empty($_POST["id_medicos"]) && !empty($_POST["id_tipo_operacion"]) && !empty($_POST["id_clinica"])) {
        $nombre_operacion = $_POST["nombre_operacion"];
        $fecha_operacion = $_POST["fecha_operacion"];
        $folio = $_POST["folio"];
        $descripcion = $_POST["descripcion"];
        $id_prestaciones = $_POST["id_prestaciones"];
        $id_paciente = $_POST["id_paciente"];
        $id_medicos = $_POST["id_medicos"];
        $id_tipo_operacion = $_POST["id_tipo_operacion"];
        $id_clinica = $_POST["id_clinica"];

        $sql = $conexion->query("INSERT INTO `operacion` (`ID_operacion`, `Nombre_operacion`, `Fecha_operacion`, `N_folio`, `descripcion`, `ID_prestaciones`, `ID_paciente`, `ID_medicos`, `ID_Tipo_operacion`, `ID_Clinica`) VALUES (NULL, '$nombre_operacion', '$fecha_operacion', '$folio', '$descripcion', '$id_prestaciones', '$id_paciente', '$id_medicos', '$id_tipo_operacion', '$id_clinica')");

        if ($sql == 1) {
            echo "<div class='alert alert-success'>Operación registrada correctamente</div>";
        } else {
            echo "<div class='alert alert-danger'>Error al registrar la operación</div>";
        }
    } else {
        echo "<div class='alert alert-warning'>Algunos de los campos están vacíos</div>";
    }
}
?>

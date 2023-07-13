<?php
if (!empty($_POST["btnmodificar"])) {
    if (!empty($_POST["nombre"]) && !empty($_POST["apellido"]) && !empty($_POST["rut"]) && !empty($_POST["telefono"]) && !empty($_POST["correo_electronico"]) && !empty($_POST["especialidad"])) {
        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $rut = $_POST["rut"];
        $telefono = $_POST["telefono"];
        $correoElectronico = $_POST["correo_electronico"];
        $especialidad = $_POST["especialidad"];

        $sql = $conexion->query("UPDATE `medicos` SET `Nombre_medico` = '$nombre', `Apellido` = '$apellido', `Rut_medico` = '$rut', `Telefono` = '$telefono', `Correoelectronico` = '$correoElectronico', `Especialidad` = '$especialidad' WHERE `ID_medicos` = $id");

        if ($sql == 1) {
            header("location: Registrar_medicos.php");
            exit();
        } else {
            echo "<div class='alert alert-danger'>Error al modificar médico</div>";
        }
    } else {
        echo "<div class='alert alert-warning'>Algunos de los campos están vacíos</div>";
    }
}

?>
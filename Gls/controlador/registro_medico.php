<?php
if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nombre"]) && !empty($_POST["apellido"]) && !empty($_POST["Rut"]) && !empty($_POST["telefono"]) && !empty($_POST["correo_electronico"]) && !empty($_POST["especialidad"])) {
        include "modelo/conexion.php";

        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $Rut = $_POST["Rut"];
        $telefono = $_POST["telefono"];
        $correoElectronico = $_POST["correo_electronico"];
        $especialidad = $_POST["especialidad"];

        $sql = $conexion->query("INSERT INTO `medicos` (`ID_medicos`, `Nombre_medico`, `Apellido`, `Rut_medico`, `Telefono`, `Correoelectronico`, `Especialidad`) VALUES (NULL, '$nombre', '$apellido', '$Rut', '$telefono', '$correoElectronico', '$especialidad')");

        if ($sql == 1) {
            echo "<div class='alert alert-success'>Médico registrado correctamente</div>";
        } else {
            echo "<div class='alert alert-danger'>Hubo un error al registrar el médico</div>";
        }
    } else {
        echo "<div class='alert alert-warning'>Algunos de los campos están vacíos</div>";
    }
}
?>
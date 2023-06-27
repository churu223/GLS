<?php

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["rut"]) && !empty($_POST["nombre"]) && !empty($_POST["edad"]) && !empty($_POST["telefono"]) && !empty($_POST["correo_electronico"]) && !empty($_POST["direccion"]) && !empty($_POST["aseguradora"])) {
        $id = $_POST["id"];
        $Rut = $_POST["rut"];
        $nombre = $_POST["nombre"];
        $edad = $_POST["edad"];
        $telefono = $_POST["telefono"];
        $correoElectronico = $_POST["correo_electronico"];
        $direccion = $_POST["direccion"];
        $aseguradora = $_POST["aseguradora"];
        $sql = $conexion->query("UPDATE `paciente` SET Rut_Paciente='$Rut', Nombre_paciente='$nombre', Edad=$edad, Telefono='$telefono', CorreoElectronico='$correoElectronico', Direccion='$direccion', Aseguradora='$aseguradora' WHERE ID_paciente=$id");
        
        if ($sql == 1) {
            header("location: ../Registrar_paciente.php");
            exit();
        } else {
            echo "<div class='alert alert-danger'>Error al modificar paciente</div>";
        }
    } else {
        echo "<div class='alert alert-warning'>Algunos de los campos están vacíos</div>";
    }
}
?>
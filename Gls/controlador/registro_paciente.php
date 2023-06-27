<?php
if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["rut"]) and !empty($_POST["nombre"]) and !empty($_POST["edad"])and !empty($_POST["telefono"]) and !empty($_POST["correo_electronico"]) and !empty($_POST["direccion"])and !empty($_POST["aseguradora"]))  {
        
        $Rut=$_POST["rut"];
        $nombre=$_POST["nombre"];
        $edad=$_POST["edad"];
        $telefono=$_POST["telefono"];
        $correoElectronico=$_POST["correo_electronico"];
        $direccion=$_POST["direccion"];
        $aseguradora=$_POST["aseguradora"];

        $sql=$conexion->query("INSERT INTO `paciente` (`ID_paciente`, `Rut_Paciente`, `Nombre_paciente`, `Edad`, `Telefono`, `CorreoElectronico`, `Direccion`, `Aseguradora`)VALUES(NULL,'$Rut', ' $nombre',  $edad, '$telefono', '$correoElectronico', ' $direccion', '$aseguradora')");
        if ($sql==1) {
            echo "<div class='alert alert-success'>Paciente registrado correctamente</div>";
        } else {
            echo "<div class='alert alert-danger'>Algunos de los campos esta vacio</div>";
        }

       }else {
        echo "<div class='alert alert-warning'>Algunos de los campos esta vacio</div>";
    }
}
?>

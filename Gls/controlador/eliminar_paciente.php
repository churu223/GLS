<?php
if (!empty($_GET["id"])) {
 $id=$_GET["id"];
 $sql=$conexion-> query("DELETE FROM `paciente`WHERE `ID_paciente`=$id ");
 if ($sql==1) {
    echo "<div class='alert alert-success'>Paciente eleminados correctamente</div>" ;
 }else {
    echo "<div class='alert alert-danger'>Error al eleminar</div>" ;
 }
}
?>
<?php
if (!empty($_GET["id"])) {
 $id=$_GET["id"];
 $sql=$conexion-> query("DELETE FROM `medicos`WHERE `ID_medicos`=$id ");
 if ($sql==1) {
    echo "<div class='alert alert-success'>medico eleminados correctamente</div>" ;
 }else {
    echo "<div class='alert alert-danger'>Error al eleminar</div>" ;
 }
}
?>
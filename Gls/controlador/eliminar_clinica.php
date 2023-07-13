<?php
if (!empty($_GET["id"])) {
 $id=$_GET["id"];
 $sql=$conexion-> query("DELETE FROM `clinica`WHERE `ID_clinica`=$id ");
 if ($sql==1) {
    echo "<div class='alert alert-success'>clinica eleminados correctamente</div>" ;
 }else {
    echo "<div class='alert alert-danger'>Error al eleminar</div>" ;
 }
}
?>
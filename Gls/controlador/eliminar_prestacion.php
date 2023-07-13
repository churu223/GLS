<?php
if (!empty($_GET["id"])) {
   $id = $_GET["id"];
   $sql = $conexion->query("DELETE FROM `prestaciones` WHERE `ID_Prestaciones` = $id");
   if ($sql == 1) {
       echo "<div class='alert alert-success'>Prestación eliminada correctamente</div>";
   } else {
       echo "<div class='alert alert-danger'>Error al eliminar la prestación</div>";
   }
}

?>
<?php
if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["precio"]) && !empty($_POST["descripcion"])) {
        $precio = $_POST["precio"];
        $descripcion = $_POST["descripcion"];

        $sql = $conexion->query("INSERT INTO `prestaciones` (`ID_Prestaciones`, `Precio`, `Descripcion`) VALUES (NULL, $precio, '$descripcion')");

        if ($sql == 1) {
            echo "<div class='alert alert-success'>Prestación registrada correctamente</div>";
        } else {
            echo "<div class='alert alert-danger'>Error al registrar la prestación</div>";
        }
    } else {
        echo "<div class='alert alert-warning'>Algunos de los campos están vacíos</div>";
    }
}
?>
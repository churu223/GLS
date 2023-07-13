<?php
include "modelo/conexion.php";
$id = $_GET["id"];

$sql = $conexion->query("SELECT * FROM `prestaciones` WHERE `ID_Prestaciones` = $id");

if ($sql->num_rows > 0) {
    $datos = $sql->fetch_object();

    include "controlador/modificar_prestacion.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Prestación</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <form class="col-4 p-3 m-auto" method="post">
        <h3 class="text-center text-secondary">Modificar prestación</h3>
        <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
        <div class="mb-3">
            <label for="precio" class="form-label">Precio</label>
            <input type="number" class="form-control" name="precio" value="<?= $datos->Precio ?>">
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <input type="text" class="form-control" name="descripcion" value="<?= $datos->Descripcion ?>">
        </div>
        <?php } ?>
        <button type="submit" class="btn btn-primary" name="btnmodificar" value="ok">Modificar prestación</button>
    </form>
</body>

</html>

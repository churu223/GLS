<?php
include "modelo/conexion.php";
$id = $_GET["id"];

$sql = $conexion->query("SELECT * FROM `medicos` WHERE `ID_medicos` = $id");

if ($sql->num_rows > 0) {
    $datos = $sql->fetch_object();

    include "controlador/modificar_medico.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <form class="col-4 p-3 m-auto" method="post">
        <h3 class="text-center text-secondary">Modificar médico</h3>
        <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre del médico</label>
            <input type="text" class="form-control" name="nombre" value="<?= $datos->Nombre_medico ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Apellido</label>
            <input type="text" class="form-control" name="apellido" value="<?= $datos->Apellido ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Rut del médico</label>
            <input type="text" class="form-control" name="rut" value="<?= $datos->Rut_medico ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Teléfono</label>
            <input type="text" class="form-control" name="telefono" value="<?= $datos->Telefono ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Correo electrónico</label>
            <input type="email" class="form-control" name="correo_electronico" value="<?= $datos->Correoelectronico ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Especialidad</label>
            <input type="text" class="form-control" name="especialidad" value="<?= $datos->Especialidad ?>">
        </div>
        <?php } ?>
        <button type="submit" class="btn btn-primary" name="btnmodificar" value="ok">Modificar médico</button>
    </form>
</body>

</html>

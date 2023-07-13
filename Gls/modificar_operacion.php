<?php
include "modelo/conexion.php";
$id = $_GET["id"];

$sql = $conexion->query("SELECT * FROM `operacion` WHERE `ID_operacion` = $id");

$datos = $sql->fetch_object();

include "controlador/modificar_opearacion.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar operación</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <form class="col-4 p-3 m-auto" method="post">
        <h3 class="text-center text-secondary">Modificar operación</h3>
        <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
       
        <div class="mb-3">
            <label for="nombre_operacion" class="form-label">Nombre de la operación</label>
            <input type="text" class="form-control" name="nombre_operacion" value="<?= $datos->Nombre_operacion ?>">
        </div>
        <div class="mb-3">
            <label for="fecha_operacion" class="form-label">Fecha de la operación</label>
            <input type="date" class="form-control" name="fecha_operacion" value="<?= $datos->Fecha_operacion ?>">
        </div>
        <div class="mb-3">
            <label for="folio" class="form-label">Número de folio</label>
            <input type="text" class="form-control" name="folio" value="<?= $datos->N_folio ?>">
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <input type="text" class="form-control" name="descripcion" value="<?= $datos->descripcion ?>">
        </div>
        <div class="mb-3">
            <label for="id_prestaciones" class="form-label">ID de las prestaciones</label>
            <input type="text" class="form-control" name="id_prestaciones" value="<?= $datos->ID_prestaciones ?>">
        </div>
        <div class="mb-3">
            <label for="id_paciente" class="form-label">ID del paciente</label>
            <input type="text" class="form-control" name="id_paciente" value="<?= $datos->ID_paciente ?>">
        </div>
        <div class="mb-3">
            <label for="id_medicos" class="form-label">ID de los médicos</label>
            <input type="text" class="form-control" name="id_medicos" value="<?= $datos->ID_medicos ?>">
        </div>
        <div class="mb-3">
            <label for="id_tipo_operacion" class="form-label">ID del tipo de operación</label>
            <input type="text" class="form-control" name="id_tipo_operacion" value="<?= $datos->ID_Tipo_operacion ?>">
        </div>
        <div class="mb-3">
            <label for="id_clinica" class="form-label">ID de la clínica</label>
            <input type="text" class="form-control" name="id_clinica" value="<?= $datos->ID_Clinica ?>">
        </div>

        <button type="submit" class="btn btn-primary" name="btnmodificar" value="ok">Modificar operación</button>
    </form>
</body>

</html>

<?php
include "modelo/conexion.php";
$id = $_GET["id"];

$sql = $conexion->query("SELECT * FROM `tipo_operacion` WHERE `ID_Tipo_Operacion` = $id");
$datos = $sql->fetch_object();

include "controlador/modificar_tipo_operacion.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar tipo de operación</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <form class="col-4 p-3 m-auto" method="post">
        <h3 class="text-center text-secondary">Modificar tipo de operación</h3>
        <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
       
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre del tipo de operación</label>
            <input type="text" class="form-control" name="nombre" value="<?= $datos->Nombre_Tipo_Operacion ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Categorización de la operación</label>
            <input type="text" class="form-control" name="categorizacion" value="<?= $datos->Categorizacion_Operacion ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Descripción</label>
            <input type="text" class="form-control" name="descripcion" value="<?= $datos->Descripcion ?>">
        </div>
        
        <button type="submit" class="btn btn-primary" name="btnmodificar" value="ok">Modificar tipo de operación</button>
    </form>
</body>

</html>

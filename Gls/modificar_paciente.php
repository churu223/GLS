<?php
include "modelo/conexion.php";
$id=$_GET["id"];

$sql=$conexion-> query("SELECT * FROM `paciente`WHERE `ID_paciente`=$id ")


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

        <h3 class="text-center text-secondary">Modificar paciente</h3>
        <input type="hidden" name="id" value="<?=  $_GET["id"]  ?>">
        <?php
        include "controlador/modificar_paciente.php";
        while ($datos = $sql-> fetch_object()) { ?>
             <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Rut de paciente</label>
            <input type="text" class="form-control" name="rut" value="<?=$datos->Rut_Paciente?>">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre de paciente</label>
            <input type="text" class="form-control" name="nombre"value="<?=$datos->Nombre_paciente?>">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Edad</label>
            <input type="number" class="form-control" name="edad"value="<?=$datos->Edad?>">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Telefono</label>
            <input type="text" class="form-control" name="telefono"value="<?=$datos->Telefono?>">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Correo electronico</label>
            <input type="email" class="form-control" name="correo_electronico"value="<?=$datos->CorreoElectronico?>">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Direccion</label>
            <input type="text" class="form-control" name="direccion"value="<?=$datos->Direccion?>">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Aseguradora</label>
            <input type="text" class="form-control" name="aseguradora"value="<?=$datos->Aseguradora?>">

        </div>

        <?php }
          
        ?>
       
        <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">modificar paciente</button>
    </form>

</body>

</html>
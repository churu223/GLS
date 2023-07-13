<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gls</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/77fa8cb111.js" crossorigin="anonymous"></script>
</head>

<body>

    <script>
        function eliminar() {
            var respuesta = confirm("¿Estás seguro que deseas eliminar?");
            return respuesta;
        }
    </script>

    <?php
    include "modelo/conexion.php";
    include "controlador/eliminar_paciente.php";
    ?>


    <div class="container-fluid row">


        <form id="formulario1" class="col-4 p-3" method="post">

            <h3 class="text-center text-secondary">Registro paciente</h3>
            <?php
            include "controlador/registro_paciente.php";
            ?>
            <div class="mb-3">
                <label for="rut" class="form-label">Rut de paciente</label>
                <input type="text" class="form-control" id="rut" name="rut">

            </div>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre de paciente</label>
                <input type="text" class="form-control" id="nombre" name="nombre">

            </div>
            <div class="mb-3">
                <label for="edad" class="form-label">Edad</label>
                <input type="number" class="form-control" id="edad" name="edad">

            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">Telefono</label>
                <input type="text" class="form-control" id="telefono" name="telefono">

            </div>
            <div class="mb-3">
                <label for="correo_electronico" class="form-label">Correo electronico</label>
                <input type="email" class="form-control" id="correo_electronico" name="correo_electronico">

            </div>
            <div class="mb-3">
                <label for="direccion" class="form-label">Direccion</label>
                <input type="text" class="form-control" id="direccion" name="direccion">

            </div>
            <div class="mb-3">
                <label for="aseguradora" class="form-label">Aseguradora</label>
                <input type="text" class="form-control" id="aseguradora" name="aseguradora">

            </div>

            <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar paciente</button>
        </form>

        <?php
        $busqueda = isset($_GET['busqueda']) ? $_GET['busqueda'] : '';
        if (empty($busqueda)) {
            header("location:Registrar_paciente.php");
        }
        ?>

        <div class="col-8 p-4">
            <form action="buscar_paciente.php" method="get" class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="busqueda">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
            <table class="table">
                <thead class="bg-info">
                    <tr>
                        <th scope="col">ID_paciente</th>
                        <th scope="col">Rut_Paciente</th>
                        <th scope="col">Nombre_paciente</th>
                        <th scope="col">Edad</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">CorreoElectronico</th>
                        <th scope="col">Direccion</th>
                        <th scope="col">Aseguradora</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "modelo/conexion.php";
                    $sql = $conexion->query("SELECT * FROM `paciente`");
                    while ($datos = $sql->fetch_object()) { ?>
                        <tr>
                            <td><?= $datos->ID_paciente ?></td>
                            <td><?= $datos->Rut_Paciente ?></td>
                            <td><?= $datos->Nombre_paciente ?></td>
                            <td><?= $datos->Edad ?></td>
                            <td><?= $datos->Telefono ?></td>
                            <td><?= $datos->CorreoElectronico ?></td>
                            <td><?= $datos->Direccion ?></td>
                            <td><?= $datos->Aseguradora ?></td>
                            <td>
                                <a href="modificar_paciente.php?id=<?= $datos->ID_paciente ?>" class="btn btn-small btn-warning"><i class="fas fa-pen"></i></a>
                                <a onclick="return eliminar()" href="eliminar_paciente.php?id=<?= $datos->ID_paciente ?>" class="btn btn-small btn-danger"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>

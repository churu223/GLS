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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
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
    include "controlador/eliminar_clinica.php";
    ?>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand">GLS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="Inicio_Seccion.php">Incio de seccion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="Registrar_paciente.php">Registrar paciente</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Registrar_clinica.php">Registrar clínica</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Registrar_medicos.php">Registrar médicos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Registrar_prestaciones.php">Registrar prestaciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Registrar_tipo_operacion.php">Registrar tipo de operaciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Registro_operacion.php">Registrar operación</a>
                    </li>
                </ul>
                <form action="buscar_paciente.php" method="get" class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="busqueda">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container-fluid row">
        <form id="formulario1" class="col-4 p-3" method="post">
            <h3 class="text-center text-secondary">Registro clínica</h3>
            <?php
            include "controlador/registro_clinica.php";
            ?>
            <div class="mb-3">
                <label for="nombre_clinica" class="form-label">Nombre de la clínica</label>
                <input type="text" class="form-control" name="nombre_clinica" id="nombre_clinica">
            </div>
            <div class="mb-3">
                <label for="direccion" class="form-label">Dirección</label>
                <input type="text" class="form-control" name="direccion" id="direccion">
            </div>
            <div class="mb-3">
                <label for="folio" class="form-label">Número de folio</label>
                <input type="text" class="form-control" name="folio" id="folio">
            </div>
            <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar clínica</button>
        </form>

        <div class="col-8 p-4">
            <table class="table">
                <thead class="bg-info">
                    <tr>
                        <th scope="col">ID_clinica</th>
                        <th scope="col">Nombre_clinica</th>
                        <th scope="col">Direccion</th>
                        <th scope="col">N°folio</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "modelo/conexion.php";
                    $sql = $conexion->query("SELECT * FROM `clinica`");
                    while ($datos = $sql->fetch_object()) {
                        ?>
                        <tr>
                            <td><?= $datos->ID_Clinica ?></td>
                            <td><?= $datos->Nombre_clinica ?></td>
                            <td><?= $datos->Direccion ?></td>
                            <td><?= $datos->N°folio ?></td>
                            <td>
                                <a href="modificar_clinica.php?id=<?= $datos->ID_Clinica ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a onclick="return eliminar()" href="Registrar_clinica.php?id=<?= $datos->ID_Clinica ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>

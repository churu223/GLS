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
    include "controlador/eliminar_operacion.php";
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
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container-fluid row">
        <form id="formulario1" class="col-4 p-3" method="post">
            <h3 class="text-center text-secondary">Registro operación</h3>
            <?php
            include "controlador/registro_operacion.php";
            ?>

            <div class="mb-3">
                <label for="nombre_operacion" class="form-label">Nombre de la operación</label>
                <input type="text" class="form-control" name="nombre_operacion" id="nombre_operacion">
            </div>
            <div class="mb-3">
                <label for="fecha_operacion" class="form-label">Fecha de la operación</label>
                <input type="date" class="form-control" name="fecha_operacion" id="fecha_operacion">
            </div>
            <div class="mb-3">
                <label for="folio" class="form-label">Número de folio</label>
                <input type="text" class="form-control" name="folio" id="folio">
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <input type="text" class="form-control" name="descripcion" id="descripcion">
            </div>
            <div class="mb-3">
                <label for="id_prestaciones" class="form-label">ID de las prestaciones</label>
                <select class="form-select" name="id_prestaciones" id="id_prestaciones">
                    <?php
                    $sql_prestaciones = $conexion->query("SELECT * FROM `prestaciones`");
                    while ($row = $sql_prestaciones->fetch_object()) {
                        echo "<option value='$row->ID_Prestaciones'>$row->ID_Prestaciones</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="id_paciente" class="form-label">ID del paciente</label>
                <select class="form-select" name="id_paciente" id="id_paciente">
                    <?php
                    $sql_paciente = $conexion->query("SELECT * FROM `paciente`");
                    while ($row = $sql_paciente->fetch_object()) {
                        echo "<option value='$row->ID_paciente'>$row->ID_paciente</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="id_medicos" class="form-label">ID de los médicos</label>
                <select class="form-select" name="id_medicos" id="id_medicos">
                    <?php
                    $sql_medicos = $conexion->query("SELECT * FROM `medicos`");
                    while ($row = $sql_medicos->fetch_object()) {
                        echo "<option value='$row->ID_medicos'>$row->ID_medicos</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="id_tipo_operacion" class="form-label">ID del tipo de operación</label>
                <select class="form-select" name="id_tipo_operacion" id="id_tipo_operacion">
                    <?php
                    $sql_tipo_operacion = $conexion->query("SELECT * FROM `tipo_operacion`");
                    while ($row = $sql_tipo_operacion->fetch_object()) {
                        echo "<option value='$row->ID_Tipo_Operacion'>$row->ID_Tipo_Operacion</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="id_clinica" class="form-label">ID de la clínica</label>
                <select class="form-select" name="id_clinica" id="id_clinica">
                    <?php
                    $sql_clinica = $conexion->query("SELECT * FROM `clinica`");
                    while ($row = $sql_clinica->fetch_object()) {
                        echo "<option value='$row->ID_Clinica'>$row->ID_Clinica</option>";
                    }
                    ?>
                </select>
            </div>

            <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar operación</button>
        </form>

        <div class="col-8 p-4">
            <table class="table">
                <thead class="bg-info">
                    <tr>
                        <th scope="col">ID_operacion</th>
                        <th scope="col">Nombre_operacion</th>
                        <th scope="col">Fecha_operacion</th>
                        <th scope="col">N_folio</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">ID_prestaciones</th>
                        <th scope="col">ID_paciente</th>
                        <th scope="col">ID_medicos</th>
                        <th scope="col">ID_Tipo_operacion</th>
                        <th scope="col">ID_Clinica</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = $conexion->query("SELECT * FROM `operacion`");
                    while ($datos = $sql->fetch_object()) {
                        ?>
                        <tr>
                            <td><?= $datos->ID_operacion ?></td>
                            <td><?= $datos->Nombre_operacion ?></td>
                            <td><?= $datos->Fecha_operacion ?></td>
                            <td><?= $datos->N_folio ?></td>
                            <td><?= $datos->descripcion ?></td>
                            <td><?= $datos->ID_prestaciones ?></td>
                            <td><?= $datos->ID_paciente ?></td>
                            <td><?= $datos->ID_medicos ?></td>
                            <td><?= $datos->ID_Tipo_operacion ?></td>
                            <td><?= $datos->ID_Clinica ?></td>
                            <td>
                                <a href="modificar_operacion.php?id=<?= $datos->ID_operacion ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a onclick="return eliminar()" href="Registro_operacion.php?id=<?= $datos->ID_operacion ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
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

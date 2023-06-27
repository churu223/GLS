<?php
ob_start(); // Activar el almacenamiento en búfer de salida

include "modelo/conexion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $Nombre = $_POST["Nombre_usuario"];
  $Contraseña = $_POST["Contraseña"];

  $sql = "SELECT * FROM `administrador` WHERE `Nombre`='$Nombre' AND Contaseña='$Contraseña'";
  $resultado = mysqli_query($conexion, $sql);

  if ($resultado) {
    $row = mysqli_fetch_array($resultado);

    if ($row["tipousuario"] == "user") {
      echo '<script>window.location.href = "Vista_usuario.php";</script>';
      exit();
    } elseif ($row["tipousuario"] == "admin") {
      echo '<script>window.location.href = "Registrar_paciente.php";</script>';
      exit();
    } else {
      echo "Nombre de usuario o contraseña incorrecta";
    }
  } else {
    echo "Error en la consulta:" . mysqli_error($conexion);
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio de seccion</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/77fa8cb111.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</head>
<body>
  <center>
    <h1>Inicio de seccion</h1>
    <form class="col-4 p-3" action="#" method="post">
      <div class="mb-3">
        <label for="inputUsername" class="form-label">Nombre de usuario</label>
        <input type="text" class="form-control" id="inputUsername" name="Nombre_usuario" required>
      </div>
      <div class="mb-3">
        <label for="inputPassword" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="inputPassword" name="Contraseña" required>
      </div>
      <div class="mb-3">
        <button type="submit" class="btn btn-primary">Inicio de seccion</button>
      </div>
    </form>
  </center>
</body>
</html>
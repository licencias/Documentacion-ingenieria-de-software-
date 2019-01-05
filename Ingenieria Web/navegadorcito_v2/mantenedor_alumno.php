<?php
require_once('includes/db.php');
$sqlStr = "SELECT * FROM Alumno";
$result = $connection -> query ( $sqlStr ) or die ( $connection -> error );

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mantenedor Alumnos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
          integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <h3>Backend Administrativo</h3>
        <a name="" id="" class="btn btn-primary" href="crear_alumno.php" role="button">Crear un Nuevo Alumno</a>
        <div class="table-responsive">
          <table class="table">
              <thead>
                  <tr>
                      <th>RUT</th>
                      <th>Apellido Paterno</th>
                      <th>Apellido Materno</th>
                      <th>Nombre</th>
                      <th>Acción</th>
                      <th>Acción</th>
                  </tr>
              </thead>
              <tbody>
                <?php while ( $fila = $result -> fetch_assoc ()) { ?>
                  <tr>
                      <td scope="row"><?php echo $fila['rut']; ?></td>
                      <td><?php echo $fila['apellido_paterno']; ?></td>
                      <td><?php echo $fila['apellido_materno']; ?></td>
                      <td><?php echo $fila['nombres']; ?></td>
                      <td><a href="editar_alumno.php?rut=<?php echo $fila['rut']; ?>">Editar</a></td>
                      <td><a href="eliminar_alumno.php?rut=<?php echo $fila['rut']; ?>">Eliminar</a></td>
                  </tr>
                  <?php } ?>
              </tbody>
          </table>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>
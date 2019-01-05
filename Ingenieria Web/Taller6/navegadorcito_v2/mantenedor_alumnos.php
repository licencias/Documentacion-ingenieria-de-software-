<?php
    require_once('includes/db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <link rel="stylesheet" href=<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cerulean/bootstrap.min.css" rel="stylesheet" integrity="sha384-zF4BRsG/fLiTGfR9QL82DrilZxrwgY/+du4p/c7J72zZj+FLYq4zY00RylP9ZjiT" crossorigin ="anonymous">
    <title>Mantenedor Alumnos</title>
</head>
<body>
    <div>
        <h1>Backend Administrativo - Alumnos</h1>
        <button><a href="crear_alumno.php">Crear un Nuevo Alumno</a></button>
    </div>
    <div>
        <table border>
            <tr>
                <th>Rut</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Nombres</th>
                <th></th>
                <th></th>
            </tr>
            <?php
            $sql ="SELECT * FROM Alumno";
            $result = $connection->query($sql) or die ($connection->error);
        
            while ($fila = $result->fetch_assoc()) { ?>
              <tr>
                <th><?php echo $fila['rut']; ?></th>
                <td><?php echo $fila['nombres']; ?></td>
                <td><?php echo $fila['apellido_paterno']; ?></td>
                <td><?php echo $fila['apellido_materno']; ?></td>
                <td><a href="editar_alumno.php?rut=<?php echo $fila['rut']; ?>">Editar</a></td>
                <td><a href="eliminar_alumno.php?rut=<?php echo $fila['rut']; ?>">Eliminar</a></td>
              </tr>
            <?php } ?>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>
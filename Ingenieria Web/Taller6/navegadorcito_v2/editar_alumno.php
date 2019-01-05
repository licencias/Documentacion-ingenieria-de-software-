<?php
    require_once('includes/db.php');

    $datosAlumnoSQL = "SELECT * 
        FROM Alumno 
        WHERE rut=".$_GET["rut"];

    $result = $connection->query($datosAlumnoSQL) or die ($connection->error);
    $fila = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <link rel="stylesheet" href=<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cerulean/bootstrap.min.css" rel="stylesheet" integrity="sha384-zF4BRsG/fLiTGfR9QL82DrilZxrwgY/+du4p/c7J72zZj+FLYq4zY00RylP9ZjiT" crossorigin ="anonymous">
    <title>Editar Alumno</title>
</head>
<body>
   <div>
   <h1>Backend Administrativo - Alumnos - <?php echo $fila["rut"] ?></h1>
        <form method="POST" action="modificar_alumno.php?rut=<?php echo $fila["rut"]; ?>"> 
            <p>Rut: <?php echo $fila["rut"] ?></p>
            <p>Nombres:<input type="text" name = "nombres" placeholder = "<?php echo $fila["nombres"] ?>"></p>
            <p>Apellido Paterno:<input type="text" name = "apellido_p" placeholder = "<?php echo $fila["apellido_paterno"] ?>"></p>
            <p>Apellido Materno:<input type="text" name = "apellido_m" placeholder = "<?php echo $fila["apellido_materno"] ?>"></p>

            <input type="submit" value="Actualizar datos"></td> 
        </form> 
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>
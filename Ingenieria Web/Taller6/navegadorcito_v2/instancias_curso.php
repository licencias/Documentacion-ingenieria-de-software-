<?php
    require_once('includes/db.php');

    $sql = "SELECT * 
        FROM Curso 
        WHERE sigla = '".$_GET["sigla"]."'";
    $result = $connection->query($sql) or die ($connection->error);
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
    <title>Instancias Curso</title>
</head>
<body>
    <h1>Backend Administrativo - Cursos - Instancias <?php echo $fila['sigla'];?></h1>
    <button><a href="crear_instancia_curso.php">Crear Nueva Instancia</a></button>
    <hr>
    
    <div id = "instanciasCurso">
        <table border>
            <tr>
                <th>Año</th>
                <th>Semestre</th>
                <th></th>
                <th></th>
            </tr>
            <?php
                // consulta SQL para obtener las instancias
                $instanciasSQL = "SELECT * FROM InstanciaCurso WHERE sigla_curso = '".$_GET["sigla"]."'";
                $rstdoInstancias = $connection -> query($instanciasSQL);
                while($fila2 = $rstdoInstancias -> fetch_assoc())
                {?>
                    <tr>
                        <td><?php echo $fila2["agno"]; ?></td>
                        <td><?php echo $fila2["semestre"]; ?></td>
                        <td><a href="#">Ver Inscritos</a></td>
                        <td><a href="eliminar_instancia.php?sigla=<?php echo $fila['sigla']; ?>">Eliminar</a></td>
                    </tr>
                <?php
            }?>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>
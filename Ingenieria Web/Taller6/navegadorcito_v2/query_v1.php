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
    <title>Query V1</title>
</head>
<body>
    <div>
        <?php
            if(isset($_GET [ 'rut' ])){
                $sqlStr = "SELECT * FROM Alumno WHERE rut = '" . $_GET [ 'rut' ] . "'";
                $result = $connection->query($sqlStr) or die ($connection->error);
                
                while($fila = $result->fetch_assoc()){
                    print_r($fila);
                    echo "<br/>";
                }
            }else{
                echo 'NO existe un RUT ASOCIADO a la consulta SQL en la URL';
            }
        ?>
    </div>
</body>
</html>
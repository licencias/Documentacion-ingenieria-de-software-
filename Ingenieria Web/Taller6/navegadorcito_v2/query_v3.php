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
    <title>Query V3</title>
</head>
<body>
    <div>
    <?php
        $rut = $_GET['rut'];
        $sqlStr = $connection->prepare("SELECT * FROM Alumno WHERE rut = ?");
        $sqlStr->bind_param("s",$rut);
        $sqlStr->execute();
        $result = $sqlStr->get_result();
        $sqlStr->fetch();
        $sqlStr->close();

        while($fila = $result->fetch_assoc()){
            print_r($fila);
            echo "<br/>";
        }
    ?>
    </div>
</body>
</html>
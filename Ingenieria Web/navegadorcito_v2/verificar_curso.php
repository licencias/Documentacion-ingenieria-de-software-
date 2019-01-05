<?php
require_once('includes/db.php');

$sigla = $_POST["sigla"];
if($stmt = $connection->prepare("SELECT * FROM Curso WHERE sigla=?")){
    $stmt->bind_param("s", $sigla);
    $stmt->execute();
    $result= $stmt->get_result();
    $stmt->fetch();
    $stmt->close();
    $fila = $result -> fetch_assoc ();
}

if(!$fila){
    if($stmt = $connection->prepare("INSERT INTO Curso(sigla,nombre,descripcion) VALUES(?,?,?)")){
        $stmt->bind_param("sss", $sigla, $_POST["nombre"], $_POST["descripcion"]);
        $stmt->execute();
        $result= $stmt->get_result();
        $stmt->fetch();
        $stmt->close();
        $completo=TRUE;
    }
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Title</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
          integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <?php if(!isset($completo)){ ?>
    <div class="alert alert-warning" role="alert">
        <strong>ERROR: Ya existe este curso</strong>
    </div>
    <?php }else{ ?>
        <div class="alert alert-success" role="alert">
        <strong>CORRECTO: Curso ingresado</strong>
    </div>
    <?php } ?>
    <a name="" id="" class="btn btn-info" href="mantenedor_curso.php" role="button">Regresar</a>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>
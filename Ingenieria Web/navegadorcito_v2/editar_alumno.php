<?php
require_once('includes/db.php');

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $rut = $_GET["rut"];
    $nombres = $_POST["nombres"];
    $apellido_paterno = $_POST["apellido_paterno"];
    $apellido_materno = $_POST["apellido_materno"];
    if($stmt = $connection->prepare("UPDATE Alumno SET nombres=?, apellido_paterno=?, apellido_materno=? WHERE rut=?")){
        $stmt->bind_param("ssss",$nombres,$apellido_paterno,$apellido_materno, $rut);
        $stmt->execute();
        $result= $stmt->get_result();
        $stmt->fetch();
        $stmt->close();
    }  
}


$rut = $_GET["rut"];
if($stmt = $connection->prepare("SELECT * FROM Alumno WHERE rut=?")){
    $stmt->bind_param("s", $rut);
    $stmt->execute();
    $result= $stmt->get_result();
    $stmt->fetch();
    $stmt->close();
    $fila = $result -> fetch_assoc ();
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Alumno</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
          integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid">
<?php if($_SERVER["REQUEST_METHOD"]=="POST"){ ?>
<div class="alert alert-success" role="alert">
    <strong>Alumno actualizado con éxito</strong>
</div>
                <?php } ?>
    <div class="row">
        <div class="col-sm-6">
            <div class="container">

                <h2>Backend Administrativo</h2>
                <form method="POST" action="editar_alumno.php?rut=<?php echo $fila['rut'];?>">
                    <fieldset class="form-group row">
                        <legend class="col-form-legend col-sm-1-12">RUT</legend>
                        <div class="col-sm-1-12">
                        <h3><?php echo $fila['rut'];?></h3>
                        </div>
                    </fieldset>
                    <fieldset class="form-group row">
                        <legend class="col-form-legend col-sm-1-12">Nombres</legend>
                        <div class="col-sm-1-12">
                            <input type="text" class="form-control" name="nombres" id="inputnombres" value="<?php echo $fila['nombres'];?>">
                        </div>
                    </fieldset>
                    <fieldset class="form-group row">
                        <legend class="col-form-legend col-sm-1-12">Apellido Paterno</legend>
                        <div class="col-sm-1-12">
                            <input type="text" class="form-control" name="apellido_paterno" id="inputapellido_paterno" value="<?php echo $fila['apellido_paterno'];?>">
                        </div>
                    </fieldset>
                    <fieldset class="form-group row">
                        <legend class="col-form-legend col-sm-1-12">Apellido Materno</legend>
                        <div class="col-sm-1-12">
                            <input type="text" class="form-control" name="apellido_materno" id="inputapellido_materno" value="<?php echo $fila['apellido_materno'];?>">
                        </div>
                    </fieldset>
                    <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                            <button type="submit" class="btn btn-primary">Actualizar Datos</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $(".alert").alert();
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>
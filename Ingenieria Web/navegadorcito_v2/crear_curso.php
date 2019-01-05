<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Curso</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
          integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6">
            <div class="container">

                <h2>Backend Administrativo - Cursos - Crear Nuevo</h2>
                <form method="POST" action="verificar_curso.php">
                <fieldset class="form-group row">
                <legend class="col-form-legend col-sm-1-12">Sigla</legend>
                <div class="col-sm-1-12">
                    <input type="text" class="form-control" name="sigla" id="inputsigla" required>
                </div>
            </fieldset>
                    <fieldset class="form-group row">
                        <legend class="col-form-legend col-sm-1-12">Nombre</legend>
                        <div class="col-sm-1-12">
                            <input type="text" class="form-control" name="nombre" id="inputnombre" required>
                        </div>
                    </fieldset>
                    <fieldset class="form-group row">
                        <legend class="col-form-legend col-sm-1-12">Descripción</legend>
                        <div class="col-sm-1-12">
                            <input type="text" class="form-control" name="descripcion" id="inputdescripcion" required>
                        </div>
                    </fieldset>
                    <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                            <button type="submit" class="btn btn-primary">Crear Curso</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>
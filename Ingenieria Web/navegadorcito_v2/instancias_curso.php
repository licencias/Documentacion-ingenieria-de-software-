<?php
require_once('includes/db.php');
$sigla = $_GET["sigla"];
if($stmt = $connection->prepare("SELECT * FROM InstanciaCurso WHERE sigla=?")){
    $stmt->bind_param("s", $sigla);
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
    <title>Title</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
          integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <?php if(!isset($fila) || !$fila){ ?>
    <div class="jumbotron">
        <h1 class="display-3">No hay Instancias</h1>
        <p class="lead">Este curso actualmente no cuenta con instancias</p>
        <hr class="my-2">
        <p>Puedes crear nuevas instancias.</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="crear_instancia_curso.php?sigla=<?php echo $sigla ?>" role="button">Crear Instancia</a>
        </p>
    </div>
    <?php }else{ ?>
        <a class="btn btn-primary btn-lg" href="crear_instancia_curso.php?sigla=<?php echo $sigla ?>" role="button">Crear Instancia</a>
    <div class="table-responsive">
        
      <table class="table">
          <thead>
              <tr>
                  <th>Año</th>
                  <th>Semestre</th>
                  <th></th>
                  <th></th>
              </tr>
          </thead>
          <tbody>
              <tr>
                  <td scope="row"><?php echo $fila['agno']; ?></td>
                  <td><?php echo $fila['semestre']; ?></td>
                  <td>
                    <a href="matricula_instancia_curso.php?agno=<?php echo $fila['agno']; ?>&semestre=<?php echo $fila['semestre']; ?>&sigla=<?php echo $sigla; ?>">
                    Matriculados
                    </a>
                  </td>
                  <td>
                  <a href="eliminar_instancia_curso.php?agno=<?php echo $fila['agno']; ?>&semestre=<?php echo $fila['semestre']; ?>&sigla=<?php echo $sigla; ?>">
                  Eliminar</a>
                  </td>
              </tr>
          </tbody>
      </table>
        <?php } ?>
    </div>
</div>
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>
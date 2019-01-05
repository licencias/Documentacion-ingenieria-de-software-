<?php
  require("includes/db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Cabin:700' rel='stylesheet' type='text/css'>
  <link href="css/grayscale.css" rel="stylesheet">
  <title>Admin</title>
</head>
<body>
 <header class = "col-lg-8 mx-auto">
    <div class = "container"><h1>Plataforma</h1></div>
 </header>


 <section class="content-section text-center">
    <div class = "row">
      <div class = "col-lg-8 mx-auto">
        <button class = "btn btn-lg btn-block"><a href="mantenedor_alumnos.php"> Mantenedor Alumnos</a></button>
        <button class = "btn btn-lg btn-block"><a href="mantenedor_cursos.php"> Mantenedor Cursos</a></button>
        <button class = "btn btn-lg btn-block"><a href="mantenedor_estados_matricula"> Mantenedor Estados Matricula</a></button>
      </div>
    </div>
  

      
        <div id="contact" class="row">
          <div class="col-lg-8 mx-auto">
            <ul class="list-inline banner-social-buttons">
              <li class="list-inline-item">
                  <a href="https://bitbucket.org/mikoFer/" class="btn btn-default btn-lg">
                    <i class="fa fa-bitbucket fa-fw"></i>
                    <span class="network-name">bitbucket</span>
                  </a>
                </li>
            </ul>
          </div>
        </div>
      
    </section>

  <footer>
  <div class="container text-center">
        <p>Michael Fernandez Ortega</p>
      </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

  <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <script src="js/grayscale.min.js"></script>
</body>
</html>

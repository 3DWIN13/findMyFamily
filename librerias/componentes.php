<?php

 function input($nombre, $label, $valor = '')
{
    return <<<CODIGO

    <div class="input-group flex-nowrap">
    <div class="input-group-prepend">
      <span class="input-group-text" id="addon-wrapping">{$nombre}</span>
    </div>
    <input value="$valor" name="$nombre" type="text" class="form-control" placeholder="$label" aria-label="$nombre" aria-describedby="addon-wrapping">
  </div>
    
    
CODIGO;
} 

function nav(){

  return <<<VAINA

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container">
    <a class="navbar-brand" href="index.html">Find My Family</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="oi oi-menu"></span> Menu
    </button>
    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav mr-auto">
        <li class="dropdown nav-item">
          <a href="#" class="dropdown-toggle nav-link icon d-flex align-items-center" data-toggle="dropdown">
            <i class="ion-ios-apps mr-2"></i>
            Notificaciones
            <b class="caret"></b>
          </a>
          <div class="dropdown-menu dropdown-menu-left">
            <a href="#" class="dropdown-item"><i class="ion-ios-document mr-2"></i> Notificacion 1 ejm</a>
            <a href="#" class="dropdown-item"><i class="ion-ios-document mr-2"></i>Notificacion 2 ejm</a>
          </div>
        </li>
        <li class="nav-item"><a href="index.html" class="nav-link icon d-flex align-items-center"><i class="ion-ios-exit mr-2"></i>Salir</a></li>
      </ul>
      <ul class="navbar-nav ml-auto">
      <li class="nav-item"><a href="administrador.php" class="nav-link icon d-flex align-items-center"><i ></i>Administrador</a></li>
        <li class="nav-item"><a href="login.php" class="nav-link icon d-flex align-items-center"><i ></i>Login</a></li>
        <li class="nav-item"><a href="register.php" class="nav-link icon d-flex align-items-center"><i ></i>Registro</a></li>
       <!--  <li class="nav-item"><a href="#" class="nav-link icon d-flex align-items-center"><i ></i></a></li> -->
      </ul>
    </div>
  </div>
</nav>

VAINA;
}

function start(){

  return <<<COSA1

  <!DOCTYPE html>
<html lang="en">
  <head>
    <title>FindMYFamily</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Prata&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
		
		<link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">
		<link rel="stylesheet" href="css/nouislider.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

COSA1;
}

function finaly(){

  return <<<COSA2

  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/nouislider.min.js"></script>
  <script src="js/moment-with-locales.min.js"></script>
  <script src="js/bootstrap-datetimepicker.min.js"></script>
  <script src="js/main.js"></script>

  </body>
</html>

COSA2;
}

<?php
////////////INICIO DEL HTML CON EL NAVBAR////////email, password//////////
require('librerias/motor.php');
$password;
echo start();



?>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container">
    <a class="navbar-brand" href="index2.php">Find My Family</a>
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
          <?php

          $us = sacarS();
          foreach ($us as $mostrar) { ?>
            <a href="Notificaciones.php?envio=<?=$mostrar['idF']?>" class="dropdown-item"><i class="ion-ios-document mr-2"></i><?php if ($mostrar['idU'] == $_SESSION['user_id'] && $mostrar['estatus'] == 1) {
                  # code...
                   echo $mostrar['nombreF'];
                   }else{
                    echo "En espera!";
                   } ?> </a>
          <?php } ?>
          </div>
        </li>
        <li class="nav-item"><a href="salir.php" class="nav-link icon d-flex align-items-center"><i class="ion-ios-exit mr-2"></i>salir</a></li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a href="login.php" class="nav-link icon d-flex align-items-center"><i ></i>Login</a></li>
        <li class="nav-item"><a href="register.php" class="nav-link icon d-flex align-items-center"><i ></i>Registro</a></li>
       <!--  <li class="nav-item"><a href="#" class="nav-link icon d-flex align-items-center"><i ></i></a></li> -->
      </ul>
    </div>
  </div>
</nav>

<section class="hero-wrap js-fullheight img" style="background-image: url(images/registro.jpg);">

  <form action="" method="post" enctype="multipart/form-data">


      <div class="container">
        <div class="overlay"></div>

        <br><br><br>
        <br><br><br>
        <?php
//error_reporting (E_ALL ^ E_NOTICE);
        if (isset($_POST['registro'])) {
         
          if ($_POST['pass'] == $_POST['cpass']) {
            $r = new stdClass();


            $r->nombre = $_POST['nombre'];
            $r->correo = $_POST['correo'];
            $password = password_hash($_POST['pass'], PASSWORD_BCRYPT);
            $r->pass = $_POST['pass'];
            $r->estatus='0';
            registro($r);

            echo '
            
            <div class="alert alert-success" role="alert">
  Genial, ya puedes ir a <a href="login.php" class="alert-link">Iniciar Sesion</a>. Ya estas registrado.
</div>
            
            ';
          } else {
            echo alert('Las contraseña', ' no son iguales', 'danger');
          }
        }

        ?>
        <div class="row justify-content-flex-end" >
          <div class="col-md-4 mb-4 mb-md-0">
            <div class="card card-login py-4">
              <form class="form-login" method="" action="">
                <div class="card-header card-header-primary text-center">
                  <h4 class="card-title">Registro</h4>

                  <div class="card-body p-4">
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="ion-ios-contact"></i>
                        </span>
                      </div>
                      <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Primer Nombre..." required>
                    </div>

                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="ion-ios-paper-plane"></i>
                        </span>
                      </div>
                      <input type="text" name="correo" id="correo" class="form-control" placeholder="Email... " required>
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="ion-ios-lock"></i>
                        </span>

                      </div>
                      <input type="password" name="pass" id="pass" class="form-control" placeholder="Contraseña..." required>
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="ion-ios-lock"></i>
                        </span>
                      </div>
                      <input type="password" name="cpass" id="cpass" class="form-control" required placeholder=" Confirmar Contraseña...">
                    </div>
                    <div class="container">
                      <div class="row justify-content-md-center">

                        <input type="submit" class="btn btn-light" name="registro" id="registro" value="Registrarse">


                      </div>
                    </div>

                  </div>
                </div>
            </div>
          </div>
        </div>
  </form>
  </section>



  <?= /* fin del html */ finaly(); ?>

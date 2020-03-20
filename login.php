<?php
////////////INICIO DEL HTML CON EL NAVBAR//////////////////
require('librerias/motor.php');
session_start();
if (!empty($_SESSION['user_id'])) {
  header("Location: Agregar.php");
}


echo start();
echo nav();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="csss/estilo.css" rel="stylesheet">
</head>

<body>

  <form action="" method="post">

    <section class="hero-wrap js-fullheight img" style="background-image: url(images/loginn.png); background-size: 100%;">

      <div class="container">
        <div class="overlay"></div>

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
<?php


if (isset($_POST['login'])) {

  $pase = Entrar($_POST['email']);

  if (count($pase) > 0 && $pase->pass == $_POST['password'] /* password_verify($_POST['password'], $pase->pass */) {
    $_SESSION['user_id'] = $pase->id;
    echo $_SESSION['user_id'];
    
    header("Location: Agregar.php");
  } else {
    echo '
            
    <div class="alert alert-danger" role="alert">
Tus datos han sido incorecto, <a href="register.php" class="alert-link">Registrate</a>. Para seguir con el proceso.
</div>
    
    ';
  }
}
?>
        <div class="row justify-content-flex-end" style="width: 1350px;">
          <div class="col-md-4 mb-4 mb-md-0">
            <div class="card card-login py-4">
              <form class="form-login" method="" action="">
                <div class="card-header card-header-primary text-center">
                  <h4 class="card-title">Login</h4>

                  <div class="card-body p-4">
                  
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="ion-ios-paper-plane"></i>
                        </span>
                      </div>
                      <input type="text" name="email" id="email" class="form-control" placeholder="Email...">
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="ion-ios-lock"></i>
                        </span>
                      </div>
                      <input type="password" name="password" id="password" class="form-control" placeholder="Contraseña...">
                    </div>
                    <div class="container">
                      <div class="row justify-content-md-center">

                        <input type="submit" class="btn btn-light" name="login" id="login" value="Iniciar Sesion">


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
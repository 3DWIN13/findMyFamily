<?php
////////////INICIO DEL HTML CON EL NAVBAR////////email, password//////////
require('librerias/motor.php');
$password;
echo start();

echo nav();


?>


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

<?php
////////////INICIO DEL HTML CON EL NAVBAR//////////////////
require('librerias/motor.php');
session_start();
if (!empty($_SESSION['admin_id'])) {
  header("Location: admin.php");
}
echo start(); 

 echo nav();
 
?>
<?php


if (isset($_POST['administrador'])) {

  $pase = Entra($_POST['usuario']);

  if (count($pase) > 0 && $pase->pass == $_POST['contra'] /* password_verify($_POST['password'], $pase->pass */) {
    $_SESSION['admin_id'] = $pase->id;
    echo $_SESSION['admin_id'];
    
    header("Location: admin.php");
  } else {
    echo '
            
    <div class="alert alert-danger" role="alert">
Tus datos han sido incorecto, <a href="register.php" class="alert-link">Entra con tus credenciales</a>. para seguir con el proceso.
</div>
    
    ';
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <link href="csss/estilo.css" rel="stylesheet">
</head>
<body>
<form  action="" method="post">

<section class="hero-wrap js-fullheight img" style="background-image: url(images/admin.jpg);"> 

    <div class="container" >
    <div class="overlay"></div>
    
    <br>
		  <br>
		  <br>
		  <br>
		  <br>
		  <br>
		  <br>
		  <br>
          
      <div class="row justify-content-flex-end">
        <div class="col-md-4 mb-4 mb-md-0" >
          <div class="card card-login py-4" style="width: 450px; height: 350px;">
            <form class="form-login"  method="" action="">
              <div class="card-header card-header-primary text-center">
                <h4 class="card-title">Administrador</h4>
                
              <div class="card-body p-4">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="ion-ios-paper-plane"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control" placeholder="Credenciales..." required>
                </div>
                <br>
		  
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="ion-ios-lock"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control" placeholder="Contraseña..." required>
                </div>

                
                <div class="container">
                <div class="row justify-content-md-center">
               
                  <input type="submit" class="btn btn-light "  value="Entrar">
               
             
              </div>
              </div>

      </form>

</div>
</div>            
</div>
</form>
</section>

<?= /* fin del html */ finaly(); ?>

</body>
</html>
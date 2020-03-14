<?php
////////////INICIO DEL HTML CON EL NAVBAR//////////////////
require('librerias/motor.php');
session_start();



if (!empty($_POST['email']) && !empty($_POST['password'])){
  $records = $conn->prepare('SELECT id, email, password FROM usuario WHERE email=:email');
  $records->bindParam(':email', $_POST['email']);
  $records->execute();
  $result = $records->fetch(PDO::FETCH_ASSOC);

  if(count($result) > 0 && password_verify($_POST['password'], $result['password'])){
  $_SESSION['usuario_id'] = $result['id'];
  header('Locationn: /php-Agregar'); 
  header('Location: http://localhost/findMyFamily/register.php'); 
  }else{
 $message='no';
  }
}
?>
<?php
echo start(); 

 echo nav();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php if (!empty($messsage)) : ?>
    <p><?=   $message  ?></p>
  <?php endif; ?>
<form action="Agregar.php" method="post">
<section class="hero-wrap js-fullheight img" style="background-image: url(images/loginn.png); background-size: 100%;">
<div class="overlay"></div>
    <div class="container">
    
    <br>
		  <br>
		  <br>
		  <br>
		  <br>
		  <br>
          <br>
          
      <div class="row" style="width: 1350px;">
        <div class="col-md-4 mb-4 mb-md-0">
          <div class="card card-login py-4">
          
            <form class="form-login" method="" action="">
              <div class="card-header card-header-primary text-center">
                <h4 class="card-title">Login</h4>

              <div class="card-body p-4">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="ion-ios-contact"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control" placeholder="Primer Nombre...">
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="ion-ios-paper-plane"></i>
                    </span>
                  </div>
                  <input type="email"  name="email" class="form-control" placeholder="Email...">
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="ion-ios-lock"></i>
                    </span>
                  </div>
                  <input type="password" name="password" class="form-control" placeholder="Contraseña...">
                </div>
                <div class="container">
                <div class="row justify-content-md-center">
               
                  <input type="submit" class="btn btn-light " value="Iniciar Sesion">
               
              </div>
              </div>
              </div>
              
              </div>
</form>

</section>
</body>
</html>

<?= /* fin del html */ finaly(); ?>
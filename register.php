<?php
////////////INICIO DEL HTML CON EL NAVBAR//////////////////
require('librerias/motor.php');


if (!empty($_POST['email']) && !empty($_POST['password'])){

  $sql = "INSERT INTO usuario (email, password) VALUES (:email, :password)";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':email',$_POST['email']);
  $contra = password_hash($_POST['password'], PASSWORD_BCRYPT);
  $stmt->bindParam(':password', $contra);

  if($stmt->execute()){
    
  }else{
    
  }
}
echo start(); 

 echo nav();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>REGISTRO</title>
  <link href="csss/estilo.css" rel="stylesheet">
</head>

<body>
  <?php if(!empty($message)):  ?>
    <p><?=   $message  ?></p>
  <?php  endif; ?>
<form action="register.php" method="post">
<section class="hero-wrap js-fullheight img" style="background-image: url(images/registro.jpg);" >

    <div class="container" >
    <div class="overlay"></div>
    
    <br>
		  <br>
		  <br>
		  
		  
          
      <div class="row justify-content-flex-end" style="width: 1600px;">
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
                  <input type="text" class="form-control" placeholder="Primer Nombre...">
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="ion-ios-contact"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control" placeholder="Primer Apellido...">
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="ion-ios-contact"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control" placeholder="Celular...">
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="ion-ios-paper-plane"></i>
                    </span>
                  </div>
                  <input type="email" name="email" class="form-control" placeholder="Email...">
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="ion-ios-lock"></i>
                    </span>
                  </div>
                  <input type="password" name="password" class="form-control" placeholder="Contraseña...">
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="ion-ios-lock"></i>
                    </span>
                  </div>
                  <input type="password" name="password" class="form-control" placeholder=" Confirmar Contraseña...">
                </div>
                <div class="container">
                <div class="row justify-content-md-center">
               
                  <input type="submit" class="btn btn-light " value="Registrarse">
               
             
              </div>
              </div>

</div>
              
</div>
</section>
</body>
</html>


<?= /* fin del html */ finaly(); ?>
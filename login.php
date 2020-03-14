<?php
////////////INICIO DEL HTML CON EL NAVBAR//////////////////
require('librerias/motor.php');
$c=0;
if ($_POST) {
    $i = new stdClass();
   
//nombreF, contacto, descipcion, fecha, foto, idU, idF
   
//echo "tafuncionando";
echo $c+1;
    $i->emails = $_POST['email'];
    $i->passwords = $_POST['password'];
    
   

	Entrar($i);
	header('Location: Agregar.php');
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
  <title>Login</title>
  <link href="csss/estilo.css" rel="stylesheet">
</head>

<body>

<form action="" method="post">
  
<section class="hero-wrap js-fullheight img" style="background-image: url(images/loginn.png); background-size: 100%;">

    <div class="container" >
    <div class="overlay"></div>
    
    <br>
		  <br>
		  <br>
		  <style media="screen">
			  img{
				  max-width: 250px;
				  max-height: 250px;
			  }
		  </style>
		  
          
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
                  <input type="text" name="email" class="form-control" placeholder="Email...">
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
</div>
</form>
</section>



<?= /* fin del html */ finaly(); ?>





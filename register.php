<?php
////////////INICIO DEL HTML CON EL NAVBAR//////////////////
require('librerias/motor.php');
$c=0;
if ($_POST) {
    $i = new stdClass();
   
//nombreF, contacto, descipcion, fecha, foto, idU, idF
   
//echo "tafuncionando";
echo $c+1;
    $i->email = $_POST['email'];
    $i->password = $_POST['password'];
    
   

  Login($i);
  
  echo'<script>';
  echo 'alert("Registrado");';
  echo 'window.location.href="login.php";';
  echo'</script>';
	
}

echo start(); 

 echo nav();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
<form name="AddForm" action="" method="post">

<section class="hero-wrap js-fullheight img" style="background-image: url(images/registro.jpg);"> 

    <div class="container" >
    <div class="overlay"></div>
    
    <br>
		  <br>
      <br>
      <br>
		  <br>
		 
		 
		  
          
      <div class="row justify-content-flex-end" >
        <div class="col-md-4 mb-4 mb-md-0">
          <div class="card card-login py-4" style="width: 400px; height: 580px;">
            <form class="form-login" name="AddForm" method="" action="">
              <div class="card-header card-header-primary text-center">
                <h4 class="card-title">Registro</h4>
                
              <div class="card-body p-4">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="ion-ios-contact"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control" placeholder="Primer Nombre..." required>
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="ion-ios-contact"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control" placeholder="Primer Apellido..." required>
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="ion-ios-contact"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control" placeholder="Celular..." required>
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="ion-ios-paper-plane"></i>
                    </span>
                  </div>
                  <input type="text" name="email" class="form-control" placeholder="Email..." required>
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="ion-ios-lock"></i>
                    </span>
                  </div>
                  <input type="password" name="password" id="password" class="form-control" placeholder="Contraseña..." required>
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="ion-ios-lock"></i>
                    </span>
                  </div>
                  <input type="password" name="confirmar" class="form-control" id="confirmar" placeholder=" Confirmar Contraseña..." required>
                </div>
                <div class="container">
                <div class="row justify-content-md-center">
               
                  <input type="submit" class="btn btn-light " onclick="miFuncion()" value="Registrarse">
               
             
              </div>
              </div>

      </form>

</div>
</div>            
</div>
</form>
</section>



<?= /* fin del html */ finaly(); ?>
   <script>
       function miFuncion()
{
if(AddForm.password.value != AddForm.confirmar.value){
    alert("Las contraseñas no coinciden");
    AddForm.password.value = "";
    AddForm.confirmar.value = "";
    AddForm.password.focus();
    return false;
}
}
</script>

   </script> 
</body>
</html>
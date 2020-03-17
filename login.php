<?php
////////////INICIO DEL HTML CON EL NAVBAR//////////////////
require('librerias/motor.php');

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
<script>
  function validarFormulario(){
    var nombre, email, password;
    nombre = document.getElementById("nombre").value;
    email = document.getElementByid("email").value;
    pass = document.getElementByid("password").value;

    expresion = /\w+@\w+\.+[a-z]/;

    if(nombre === "" ||	email === "" ||	pass === ""){
      alert("Todos los campos son obligatorios");
      return false;
    }
    else if(!expresion.test(email)){
      alert("El correo no es valido");
      return false;
    }
  }
</script>

<form  action="CRUD.php" method="post"> 


<section class="hero-wrap js-fullheight img" style="background-image: url(images/loginn.png); background-size: 100%;">
<form name="AddForm" onsumbit="return validarFormulario();" action="login.php" method="post"> 

    <div class="container" >
    <div class="overlay"></div>
    
    <br>
		  <br>
      <br>
      <br>
      <br>
      <br>
		  
		  </style>
		  <form action="login.php" method="post">
      <div class="row justify-content-flex-end" >
        <div class="col-md-4 mb-4 mb-md-0">
          <div class="card card-login py-4" style="width: 400px; height: 400px;">
            
              <div class="card-header card-header-primary text-center">
                <h4 class="card-title">Login</h4>
                
              <div class="card-body p-4">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="ion-ios-contact"></i>
                    </span>
                  </div>
                  <input type="text" id="nombre" class="form-control" placeholder="Primer Nombre..." required>
                </div>

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="ion-ios-paper-plane"></i>
                    </span>
                  </div>
                  <input type="email" name="email" id="email" class="form-control" placeholder="Email..." required>
                </div>
                
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="ion-ios-lock"></i>
                    </span>
                  </div>
                  <input type="password" name="password" id="password" class="form-control" placeholder="Contraseña... " required>
                </div>
                <div class="container">
                <div class="row justify-content-md-center">
               
                  <input type="submit"  class="btn btn-light " value="Iniciar Sesion">
               
             
              </div>
              </div>
              </form>

</div>
</div>            
</div>
</form>
</section>



<?= /* fin del html */ finaly(); ?>





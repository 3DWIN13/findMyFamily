<?php
////////////INICIO DEL HTML CON EL NAVBAR//////////////////
require('librerias/motor.php');

echo start(); 

 echo nav();
?>



<section class="hero-wrap js-fullheight img" style="background-image: url(images/bg_3.jpg);">
<div class="overlay"></div>
    <div class="container">
    <br>
		  <br>
		  <br>
		  
		  
          
      <div class="row">
        <div class="col-md-4 mb-4 mb-md-0">
          <div class="card card-login py-4">
            <form class="form-login" method="" action="">
              <div class="card-header card-header-primary text-center">
                <h4 class="card-title">Login</h4>
                <div class="social-line">
                  <a href="https://www.facebook.com/criismlin" class="btn-icon d-flex align-items-center justify-content-center">
                    <i class="ion-logo-facebook"></i>
                  </a>
                  <a href="https://www.facebook.com/criismlin" class="btn-icon d-flex align-items-center justify-content-center">
                    <i class="ion-logo-twitter"></i>
                  </a>
                  <a href="https://www.facebook.com/criismlin" class="btn-icon d-flex align-items-center justify-content-center">
                    <i class="ion-logo-googleplus"></i>
                  </a>
                </div>
              </div>
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
                  <input type="email" class="form-control" placeholder="Email...">
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="ion-ios-lock"></i>
                    </span>
                  </div>
                  <input type="password" class="form-control" placeholder="Contraseña...">
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="ion-ios-lock"></i>
                    </span>
                  </div>
                  <input type="password" class="form-control" placeholder=" Confirmar Contraseña...">
                </div>
              </div>
              
</div>
</section>
<?= /* fin del html */ finaly(); ?>
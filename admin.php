<?php
////////////INICIO DEL HTML CON EL NAVBAR//////////////////
require('librerias/motor.php');




echo start(); 
 echo nav();
?>



<section class="hero-wrap js-fullheight img" style="background-image: url(images/bg_3.jpg);">
<form action="#" method="post" enctype="multipart/form-data" >
  		<div ></div>
  		<div class="container">
		  

		  <br>
		  <br>
		  <br>
		  <br>
		  <br>
		  <br>
          <br>
          
		  <?php
		 
		 session_start();

		 
		 ?>
		 
		
		  <form action="" method="post">
		  <div class="row">
		  <div class="col-md-5">
			
         <button class="btn btn-success"><a href="index.html">Inicio</a></button>
          <br>
		  <br>
          <button type="submit" id="enviar" name="enviar" class="btn btn-success">configuracion</button>
          <br>
          <br>
          <a href="admin.php"><button  class="btn btn-success">Personas encontradas</a></button>
          <br>
          <br>
	
		
		  </div>

		  <div class="col-md-7">
	            <div class="form-group form-group-2">
	              <div class="input-group">
	                <div class="input-group-prepend">
                    <input type="file" name="imagen" id="imagen" />

<div id="preview">


</div>
	                </div>
	              </div>
	            </div>
			  
			  
			 
	            <div class="form-group form-group-2">
	              <div class="input-group">
	                <div class="input-group-prepend">
	                  <span class="input-group-text">
						<!-- <i nombreF, contacto, descipcion, fecha, foto, idU,class="ion-logo-ionic"></i> -->
						Nombre
	                  </span>
	                </div>
	                <input type="text"  class="form-control form-control-shadow" placeholder="El nombre de la persona desaparecida es.">
	              </div>
	            </div>
			  
			  
                <div class="form-group form-group-2">
	              <div class="input-group">
	                <div class="input-group-prepend">
	                  <span class="input-group-text">
						<!-- <inombreF, contacto, descipcion, fecha, foto, idU, class="ion-logo-ionic"></i> -->
						Fecha
	                  </span>
	                </div>
	                <input type="text"  class="form-control form-control-shadow" placeholder="Se ha visto en este lugar.">
	              </div>
                </div>
                
	            <div class="form-group form-group-2">
	              <div class="input-group">
	                <div class="input-group-prepend">
	                  <span class="input-group-text">
						<!-- <i nombreF, contacto, descipcion, fecha, foto, idU,class="ion-logo-ionic"></i> -->
						Enfermedad
	                  </span>
	                </div>
	                <input type="text"  class="form-control form-control-shadow" placeholder="Enfermedad que posee.">
	              </div>
	            </div>
			
			  
		
			  </div>

			  </div>
			  </form>
		  </div>
		  </form>
  	</section>

      
     
<?= /* fin del html */ finaly(); ?>



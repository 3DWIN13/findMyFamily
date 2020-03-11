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
		  <br>
		  <br>
		  <br>
		  <br>
		  <div class="row">
		  <div class="col-md-5">

		  <input type="file" name="imagen" id="imagen">

		  <div id="preview">

		  </div>
		  <script src="https://ajax.googleapis.com/ajax/libs/d3js/5.15.0/d3.min.js"></script>
		  <script type="text/javascript">

		  (function(){
			function filePreview(input){
				if(input.files && input.files[0]){
					var reader = new FileReader();

					reader.onload=function(e){
						$('#preview').html("<img src='"+e.target.result+"' />");

					}
					reader.readAsDataURL(input.files[0]);
				}
			}
			$('#imagen').change(function(){

				filePreview(this);
			});
		  })();

		  </script>
		  </div>

		  <div class="col-md-7">
	            <div class="form-group form-group-2">
	              <div class="input-group">
	                <div class="input-group-prepend">
	                  <span class="input-group-text">
						<!-- <i class="ion-logo-ionic"></i> -->
						Nombre
	                  </span>
	                </div>
	                <input type="text" class="form-control form-control-shadow" placeholder="Nombre de la persona perdida.">
	              </div>
	            </div>
			  
			  
			 
	            <div class="form-group form-group-2">
	              <div class="input-group">
	                <div class="input-group-prepend">
	                  <span class="input-group-text">
						<!-- <i class="ion-logo-ionic"></i> -->
						Fecha
	                  </span>
	                </div>
	                <input type="text" class="form-control form-control-shadow" placeholder="Fecha ultima vez vista.">
	              </div>
	            </div>
			  
			  
			  
	            <div class="form-group form-group-2">
	              <div class="input-group">
	                <div class="input-group-prepend">
	                  <span class="input-group-text">
						<!-- <i class="ion-logo-ionic"></i> -->
						Enfermedad
	                  </span>
	                </div>
	                <input type="text" class="form-control form-control-shadow" placeholder="Resalte una enfermedad del perdido, si es que tiene.">
	              </div>
	            </div>
			
			  
			  
	            <div class="form-group form-group-2">
	              <div class="input-group">
	                <div class="input-group-prepend">
	                  <span class="input-group-text">
						<!-- <i class="ion-logo-ionic"></i> -->
						contacto
	                  </span>
	                </div>
	                <input type="text" class="form-control form-control-shadow" placeholder="Correo electronico o telefono de contacto.">
	              </div>
	            </div>
	          

			  </div>

			  </div>
  		</div>
  	</section>

      
     
<?= /* fin del html */ finaly(); ?>



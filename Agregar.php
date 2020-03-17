
<?php
////////////INICIO DEL HTML CON EL NAVBAR//////////////////
require('librerias/motor.php');
$c=0;
if ( isset($_POST['enviar']) /*$_POST*/ ) {
    $i = new stdClass();
   
//nombreF, contacto, descipcion, fecha, foto, idU, idF
  $image = addslashes(file_get_contents($_FILES['imagen']['tmp_name'])); 
//echo "tafuncionando";
//echo $_POST['imagen']."iiiiiiiiiiiiiii";
    $i->nombreF = $_POST['nombreF'];
    $i->contacto = $_POST['contacto'];
    $i->descipcion = $_POST['descipcion'];
    $i->fecha = $_POST['fecha'];
     $i->foto =$image; //$_POST['foto'];
    $i->idU ="s dfsdfsdf";// $_POST['idU'];
    $i->idF ="sdfsdfsd"; //$_POST['idF']; 
   

	guardarInfoUsuario($i);
	
}



echo start(); 

 echo nav();
?>



<section class="hero-wrap js-fullheight img" style="background-image: url(images/bg_3.jpg);">
<form action="#" method="post" enctype="multipart/form-data" >
  		<div class="overlay"></div>
  		<div class="container">
		  

		  <br>
		  <br>
		  <br>
		  <br>
		  <br>
		  <br>
		  <br>
		  <style media="screen">
			  img{
				  max-width: 250px;
				  max-height: 250px;
			  }
		  </style>
		  <form action="" method="post">
		  <div class="row">
		  <div class="col-md-5">
			

		  <input type="file" name="imagen" id="imagen" />

		  <div id="preview">


		  </div>

	
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>		  
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
			$(imagen).change(function(){

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
						<!-- //nombreF, contacto, descipcion, fecha, foto, idU, idF<i class="ion-logo-ionic"></i> -->
						Nombre
	                  </span>
	                </div>
	                <input type="text" name="nombreF" id="nombreF" class="form-control form-control-shadow" placeholder="Nombre de la persona perdida.">
	              </div>
	            </div>
			  
			  
			 
	            <div class="form-group form-group-2">
	              <div class="input-group">
	                <div class="input-group-prepend">
	                  <span class="input-group-text">
						<!-- <i nombreF, contacto, descipcion, fecha, foto, idU,class="ion-logo-ionic"></i> -->
						Fecha
	                  </span>
	                </div>
	                <input type="text" name="contacto" id="contacto" class="form-control form-control-shadow" placeholder="Fecha ultima vez vista.">
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
	                <input type="text" name="descipcion" id="descipcion" class="form-control form-control-shadow" placeholder="Resalte una enfermedad del perdido, si es que tiene.">
	              </div>
	            </div>
			
			  
			  
	            <div class="form-group form-group-2">
	              <div class="input-group">
	                <div class="input-group-prepend">
	                  <span class="input-group-text">
						<!-- <inombreF, contacto, descipcion, fecha, foto, idU, class="ion-logo-ionic"></i> -->
						contacto
	                  </span>
	                </div>
	                <input type="text" name="fecha" id="fecha" class="form-control form-control-shadow" placeholder="Correo electronico o telefono de contacto.">
	              </div>
	            </div>
			  
				<button type="submit" id="enviar" name="enviar" class="btn btn-success">Enviar</button>

				<a style="margin-left: 60%;" href="PruebaA1.php" class="btn btn-warning btn-link" role="button">Probar algoritmo</a>

			  </div>

			  </div>
			  </form>
		  </div>
		  </form>
  	</section>

      
     
<?= /* fin del html */ finaly(); ?>



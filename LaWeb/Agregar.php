
<?php
////////////INICIO DEL HTML CON EL NAVBAR//////////////////
require('librerias/motor.php');

session_start();


echo start(); 
// echo nav();
?>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container">
    <a class="navbar-brand" href="index2.php">Find My Family</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="oi oi-menu"></span> Menu
    </button>
    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav mr-auto">
        <li class="dropdown nav-item">
          <a href="#" class="dropdown-toggle nav-link icon d-flex align-items-center" data-toggle="dropdown">
            <i class="ion-ios-apps mr-2"></i>
            Notificaciones
            <b class="caret"></b>
          </a>
          <div class="dropdown-menu dropdown-menu-left">
          <?php

          $us = sacarS();
          foreach ($us as $mostrar) { ?>
            <a href="Notificaciones.php?envio=<?=$mostrar['idF']?>" class="dropdown-item"><i class="ion-ios-document mr-2"></i><?php if ($mostrar['idU'] == $_SESSION['user_id'] && $mostrar['estatus'] == 1) {
                  # code...
                   echo $mostrar['nombreF'];
                   }else{
                    echo "En espera!";
                   } ?> </a>
          <?php } ?>
          </div>
        </li>
        <li class="nav-item"><a href="salir.php" class="nav-link icon d-flex align-items-center"><i class="ion-ios-exit mr-2"></i>salir</a></li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a href="login.php" class="nav-link icon d-flex align-items-center"><i ></i>Login</a></li>
        <li class="nav-item"><a href="register.php" class="nav-link icon d-flex align-items-center"><i ></i>Registro</a></li>
       <!--  <li class="nav-item"><a href="#" class="nav-link icon d-flex align-items-center"><i ></i></a></li> -->
      </ul>
    </div>
  </div>
</nav>


<section class="hero-wrap js-fullheight img" style="background-image: url(images/bg_3.jpg);">
<form action="" method="post" enctype="multipart/form-data" >
  		<div class="overlay"></div>
  		<div class="container">
		  

		  <br>
		  <br>
		  <br>
		  <br>
		  <br>
		  <br>
		  <br>
		  <?php
		 
	//	 session_start();
$c=0;
if ( isset($_POST['enviar']) /*$_POST*/ ) {
    $i = new stdClass();
   
//nombreF, contacto, descipcion, fecha, foto, idU, idF
  $image = addslashes(file_get_contents($_FILES['imagen']['tmp_name'])); 
//$nombreimg = $_FILES['imagen']['name'];
$archivo = $_FILES['imagen']['tmp_name'];

$rutas =" ";
if (!file_exists($_POST['nombreF'])) {
	# code...
	mkdir($_POST['nombreF'], 755);
	$rutas=$_POST['nombreF']."/1.jpg";
	move_uploaded_file($archivo,$rutas);
}



  //echo "tafuncionando";
//echo $_POST['imagen']."iiiiiiiiiiiiiii";

	# code... echo $_SESSION['user_id'];
	

    $i->nombreF = $_POST['nombreF'];
    $i->contacto = $_POST['contacto'];
    $i->descipcion = $_POST['descipcion'];
    $i->fecha = $_POST['fecha'];
	 $i->foto =$image; //$_POST['foto'];
    $i->img= $rutas;
    $i->idU =$_SESSION['user_id'];// $_POST['idU'];
	$i->idF =""; //$_POST['idF']; 
	
	
	guardarInfoUsuario($i);
    
	echo alert('Envio de informacion exitosa ',' .Puedes probar el algoritmo con la foto que acabas de subir', 'success');
	
	
	
}
		 
		 ?>
		  <style media="screen">
			  img{
				  max-width: 250px;
				  max-height: 250px;
			  }
		  </style>
		  <form action="" method="post">
		  <div class="row">
		  <div class="col-md-5">
			

		  <input type="file" name="imagen" id="imagen" required />

		  <div id="preview">


		  </div>

	
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>	 <script type="text/javascript">

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
	                <input type="text" name="nombreF" id="nombreF" class="form-control form-control-shadow" required placeholder="Nombre de la persona perdida.">
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
	                <input type="text" name="fecha" id="fecha" required class="form-control form-control-shadow" placeholder="Fecha ultima vez vista.">
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
	                <input type="text" name="descipcion" id="descipcion"  class="form-control form-control-shadow" placeholder="Resalte una enfermedad del perdido, si es que tiene.">
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
	                <input type="text" name="contacto" id="contacto" required class="form-control form-control-shadow" placeholder="Correo electronico o telefono de contacto.">
	              </div>
	            </div>
			  
				<button type="submit" id="enviar" name="enviar" class="btn btn-success">Enviar</button>
				


				<a style="margin-left: 60%;" href="cassi/A1.php" class="btn btn-warning btn-link" role="button">Probar algoritmo</a>

			  </div>

			  </div>
			  </form>
		  </div>
		  </form>
  	</section>

      
     
<?= /* fin del html */ finaly(); ?>



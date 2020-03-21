<?php
////////////INICIO DEL HTML CON EL NAVBAR//////////////////
require('librerias/motor.php');



session_start();


echo start(); 
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <link href="assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet">

</head>
<body>
<section class="hero-wrap js-fullheight img" style="background-image: url(images/adminn.jpg);">
<form action="#" method="post" enctype="multipart/form-data" >
  		<div class="overlay"></div>
  		<div class="container">
	
          
		 
		 <div class=" ">
    <div class="sidebar" data-color="danger" data-background-color="black" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="index.html" class="simple-text logo-normal">
          Administrador
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="index.html">
              <i class="material-icons">dashboard</i>
              <p>Find My Family</p>
            </a>
          </li>
         
          <li class="nav-item ">
            <a class="nav-link" href="Agregar.php">
              <i class="material-icons">person</i>
              <p>Usuario</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="admin.php">
              <i class="material-icons">person</i>
              <p>Personas encontradas</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="index.html">
              <i class="material-icons">bubble_chart</i>
              <p>Configuracion</p>
            </a>
          </li>
          
         
          <li class="nav-item ">
            <a class="nav-link" href="PruebaA1.php">
              <i class="material-icons">language</i>
              <p>Probar algoritmo</p>
            </a>
          </li>
          <li class="nav-item active-pro ">
            <a class="nav-link" href="salir.php">
              <i class="material-icons">unarchive</i>
              <p>Salir</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
		
			  </div>
		  </form>
  	</section>
</body>
</html>


      
     
<?= /* fin del html */ finaly(); ?>



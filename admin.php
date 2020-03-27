<?php
////////////INICIO DEL HTML CON EL NAVBAR//////////////////
require('librerias/motor.php');


echo start();
$n="";
if (isset($_POST['borra'])) {
  # code...
  borrar2($_POST['borra']);
  
$n=$_POST['nombreF'];


@unlink($n."/1.jpg");
//@unlink($n); 
rmdir($n);

}

?>

<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
<link href="assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet">

<section class="hero-wrap js-fullheight img" style="background-image: url(images/adminn.jpg);">
  <div class="overlay"></div>
  <div class="container">



    <div class=" ">
      <div class="sidebar" data-color="danger" data-background-color="black" data-image="../assets/img/sidebar-1.jpg">


        <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
        <div class="logo"><a href="admin.php" class="simple-text logo-normal">
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
              <a class="nav-link" href="PruebaA2.php">
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
    <br>

    <form action="#" method="post">
    <?php
    $us = sacar();
    foreach ($us as $mostrar) { ?>
      <div style='margin-left: 20%;' class='col-lg-6 col-md-12'>
        <div class='card'>

          <div class='card-body'>
           
            <ul class="list-unstyled">
              <li class="media">

                <img class="mr-3" style="margin-left:17%;width: 150px;
				        height: 150px;" src="<?= $mostrar['img'] ?>" alt="Generic placeholder image">
                <div class="media-body">

                  <h3 class="mt-0 mb-1"><?= $mostrar['nombreF'] ?></h3>
                  <strong>Contacto: </strong><?= $mostrar['contacto'] ?><br>
                  <strong>Fecha: </strong> <?= $mostrar['fecha']  ?><br>
                  <strong>Enfermedad: </strong><?= $mostrar['descripcion']  ?>

                  <input type="text" value="<?= $mostrar['nombreF'] ?>" id="nombreF" name="nombreF">
              
              </li>
            </ul>
          </div>
          <button type="submit" name="borra" id="borra" value="<?= $mostrar['idF'] ?>" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm" data-original-title="Remove">
              <i class="material-icons">close</i>
            </button>
        </div>
     
      </div>


    <?php }  ?>

    </form>
</section>





<?= /* fin del html */ finaly(); ?>
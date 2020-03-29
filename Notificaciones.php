<?php
require('librerias/motor.php');
session_start();
$envio=$_GET['envio'];
$g=noti($envio);

if (isset($_POST['c'])) {
    # code...
    borrar2($_POST['c']);
    header("Location: index2.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>FindMYFamily</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Prata&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="css/nouislider.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="main-section">

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
                                //echo "<input type='hidden' name='shh' id='shh' value=''>"; 
                               } else {
                          echo "En espera!";
                            } ?> </a>
                                <?php } ?>
                            </div>
                        </li>
                        <li class="nav-item"><a href="http://localhost/findMyFamily/" class="nav-link icon d-flex align-items-center"><i class="ion-ios-exit mr-2"></i>salir</a></li>
                    </ul>
                    <a href="salir.php"></a>

                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item"><a href="login.php" class="nav-link icon d-flex align-items-center"><i></i>Login</a></li>
                        <li class="nav-item"><a href="register.php" class="nav-link icon d-flex align-items-center"><i></i>Registro</a></li>

                        <!--  <li class="nav-item"><a href="#" class="nav-link icon d-flex align-items-center"><i ></i></a></li> -->
                    </ul>


                </div>
            </div>
        </nav>
        <!-- END nav -->


        <section class="hero-wrap js-fullheight img" style="background-image: url(images/bg_1.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row description js-fullheight align-items-center justify-content-center">
                    <div class="col-md-8 text-center">
                        <div class="card card-style">
                            <h5 class="card-header py-4"><?= $g->nombreF ?></h5>
                            <div class="card-body">
                                <h5 class="card-title"><?php if ($g->estatus==1) {
                                    # code...
                                    echo "Se ha encontrado";
                                } else{
                                    echo "desaparecido";
                                } ?></h5>
                                <img class="mr-3" style="width: 150px;
                        height: 150px;" src="<?= $g->img ?>" alt="Generic placeholder image">
                        <?php
                        $div = "";
                        $div1 ="";
                        $div2 ="";
                        $div3 ="";
                        $div4 ="";
                        $div5 ="";
                        $div6 ="";
                        $wepa= sacarC();
                        foreach ($wepa as $key) {
                            # code...
                            
                            $div = (!$key['camara1']==" ") ? $key['camara1'] : " camaras sin registrar " ;
                            $div1 = (!$key['camara2']==" ") ? $key['camara2'] :  $key['camara1'] ;
                            $div2 = (!$key['camara3']==" ") ? $key['camara3'] :  $key['camara1'] ;
                            $div3 = (!$key['camara4']==" ") ? $key['camara4'] :  $key['camara1'] ;
                            $div4 = (!$key['camara5']==" ") ? $key['camara5'] :  $key['camara1'] ;
                            $div5 = (!$key['camara6']==" ") ? $key['camara6'] :  $key['camara1'] ;
                            $div6 = (!$key['camara7']==" ") ? $key['camara7'] :  $key['camara1'] ;
                        }
                        
                        $lascamaras = array(
                            1=> $div, 
                            2=> $div1,
                            3=> $div2,
                            4=> $div3,
                            5=> $div4,
                            6=> $div5,
                            7=> $div6
                        );

                        $dike = rand(1,7);
                        echo "<br>Se a registrado en la camara:<strong> $lascamaras[$dike];</strong>"; 
                        ?>
                        <p>confirme si es a quien buscabas</p><strong></strong>
                            <form action="#" method="post">
                                <button name="c" id="c" class="btn btn-primary" value="<?= $g->idF ?>"> Confirmar </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- - - - - -end- - - - -  -->


    </div>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>


    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/nouislider.min.js"></script>
    <script src="js/moment-with-locales.min.js"></script>
    <script src="js/bootstrap-datetimepicker.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>
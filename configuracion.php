<?php
////////////INICIO DEL HTML CON EL NAVBAR//////////////////
require('librerias/motor.php');

if (isset($_POST['enviar'])) {
    # code...
    $div = (isset($_POST['eldiv'])) ? $_POST['eldiv'] : " " ;
    $div1 = (isset($_POST['eldiv1'])) ? $_POST['eldiv1'] : " " ;
    $div2 = (isset($_POST['eldiv2'])) ? $_POST['eldiv2'] : " " ;
    $div3 = (isset($_POST['eldiv3'])) ? $_POST['eldiv3'] : " " ;
    $div4 = (isset($_POST['eldiv4'])) ? $_POST['eldiv4'] : " " ;
    $div5 = (isset($_POST['eldiv5'])) ? $_POST['eldiv5'] : " " ;
    $div6 = (isset($_POST['eldiv6'])) ? $_POST['eldiv6'] : " " ;

    $e= new stdClass();

    $e->camara1=$div;
    $e->camara2=$div1;
    $e->camara3=$div2;
    $e->camara4=$div3;
    $e->camara5=$div4;
    $e->camara6=$div5;
    $e->camara7=$div6;
    guardar3($e);



   // echo $div."////////". $div1. "/////////". $div2;
}

echo start();
$n = "";
if (isset($_POST['borra'])) {
    # code...
    borrar2($_POST['borra']);

    $n = $_POST['nombreF'];


    @unlink($n . "/1.jpg");
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
                        <li class="nav-item ">
                            <a class="nav-link" href="index2.php">
                                <i class="material-icons">dashboard</i>
                                <p>Find My Family</p>
                            </a>
                        </li>

                       
                        <li class="nav-item ">
                            <a class="nav-link" href="PE.php">
                                <i class="material-icons">person</i>
                                <p>Personas encontradas</p>
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="configuracion.php">
                                <i class="material-icons">bubble_chart</i>
                                <p>Configuracion</p>
                            </a>
                        </li>


                        <li class="nav-item ">
                            <a class="nav-link" href="A2.php">
                                <i class="material-icons">language</i>
                                <p>Simulacion</p>
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

        <!--  ************************************document.getElementById('cont2').innerHTML=' <div style="margin-left: 52%; width: 34%" class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="material-icons">close</i></button><span><b> Bien hecho </b> hemos notificado a la persona</span></div>' ;*********************************************  -->

        <form action="#" method="post">

            <div style='margin-left: 20%;' class='col-lg-6 col-md-12'>
                <div class='card'>
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Añade camaras</h4>
                        <p class="card-category">Preciona el mas, para anadir mas campos de texto</p>
                    </div>
                    <form action="#" method="post">
                        <div class="card-body">
                            <div class="form-group bmd-form-group">
                                <input type="text" name="eldiv" id="eldiv" required placeholder="Camaras" class="form-control">
                            </div>


                            <div id="eldiv1"></div>
                            <div id="eldiv2"></div>
                            <div id="eldiv3"></div>
                            <div id="eldiv4"></div>
                            <div id="eldiv5"></div>
                            <div id="eldiv6"></div>
                            <div class="row">

                                <button style="margin-left:30%;" type="button" class="btn btn-outline-primary" id="mas" onclick="Mas();"> + </button>
                                <input type="submit" style="margin-left:10%;" value="Enviar" id="enviar" name="enviar" class="btn btn-primary pull-right">

                            </div>

                        </div>
                    </form>

                </div>


            </div>

            // <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <script>
                let i = 1;

                function Mas() {
                    console.log('epppoopdias')

                    // if ($("#mas").click) {
                    document.getElementById(`eldiv${i}`).innerHTML = `<input name="eldiv${i}" id="eldiv${i}" type="text" placeholder="Camaras" class="form-control">`;
                    i++;
                    //}



                }
            </script>


        </form>
</section>





<?= /* fin del html */ finaly(); ?>
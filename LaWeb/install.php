<?php
require('librerias/motor.php');

if($_POST){

    $cox = mysqli_connect($_POST['DB_HOST'],$_POST['DB_USER'],$_POST['DB_PASS']) 
    or die("<script>
    
            alert('conexion invalida verificar');
            window.location = 'install.php';
            
    </script>");

    mysqli_query($cox, "drop `{$_POST['DB_NAME']}`");
mysqli_query($cox, "CREATE DATABASE `{$_POST['DB_NAME']}`");
mysqli_query($cox, "USE `{$_POST['DB_NAME']}`");
mysqli_query($cox, "CREATE TABLE IF NOT EXISTS `usuarios` (
    `id` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;");

mysqli_query($cox, "INSERT INTO `usuarios` (`id`, `nombre`, `email`, `pass`, `admin`) VALUES
(1, 'edwin', 'edwin@gmail.com', '123', 1);");

mysqli_query($cox, "CREATE TABLE IF NOT EXISTS `informacionu` (
   `nombreF` text NOT NULL,
  `contacto` varchar(20) NOT NULL,
  `descripcion` text NOT NULL,
  `fecha` varchar(20) NOT NULL,
  `foto` longblob NOT NULL,
  `img` varchar(100) NOT NULL,
  `idU` int(10) NOT NULL,
  `idF` int(10) NOT NULL,
  `estatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;");

mysqli_query($cox, "CREATE TABLE IF NOT EXISTS `camaras` (
    `id` int(11) NOT NULL,
  `camara1` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `camara2` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `camara3` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `camara4` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `camara5` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `camara6` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `camara7` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;");

    $arc = <<<archivo
    <?php
define('DB_HOST','{$_POST['DB_HOST']}');
define('DB_USER','{$_POST['DB_USER']}');
define('DB_PASS','{$_POST['DB_PASS']}');
define('DB_NAME','{$_POST['DB_NAME']}');
define('IS_DEBUG', true);
archivo;

            file_put_contents('librerias/config_x.php', $arc);

echo "<script>
        window.location= 'index2.php';
</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Instalador</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    <script src='main.js'></script>
</head>
<body style="background: #C0C0C0">

    <div class="container">
        <form  method="post" action="">
        <br>
        <br>
            <div>
                <?= input('DB_HOST', 'servidor'); ?>
            </div>
            <br>
            <div>
                <?= input('DB_USER', 'nombre de usuario de la base de datos'); ?>
            </div>
            <br>
            <div>
                <?= input('DB_PASS', 'clave de la base de datos, si tienes, si no deja el campo vacio'); ?>
            </div>
            <br>
            <div>
                <?= input('DB_NAME', 'nombre de la base de datos'); ?>
            </div>
            <br>
            <div class="text-center">
                <button type="submit" style="width:140px; margin:5px;" class="btn btn-success">
                   Guardar 
                </button>
            </div>
        </form>
</div>

</body>
</html>
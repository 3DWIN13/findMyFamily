<?php
require('librerias/motor.php');

if (isset($_POST['name'])) {
  # code...
  $e = new stdClass();

  $e->nombreF = $_POST['name'];
  estatus($e);
  $a = otra($e);

  echo $_POST['name'];



$idU= $a->idU;

$c=cargar($idU);
  
  
  //echo json_encode($listP);

  $header = "From: noreply@example.com". "\r\n";
  $header.= "Reply-To: noreply@example.com"."\r\n";
  $header.= "X-Mailer: PHP/". phpversion();
  @mail($c->email,'Pariente Encontrado','Nuestro algoritmo detecto alguien conocido en la base de datos con el nombre: '.$_POST['name'].'\r\n acedea a el link http://localhost/FindMyFamily/pruebas.php', $header);
}?>


<?php
require('librerias/motor.php');

if (isset($_POST['name'])) {
  # code...
  $e = new stdClass();

  $e->nombreF = $_POST['name'];
  estatus($e);
  
  echo $_POST['name'];
  
  //echo json_encode($listP);
}?>


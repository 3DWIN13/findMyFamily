<?php session_start();
////////////INICIO DEL HTML CON EL NAVBAR//////////////////
require('librerias/motor.php');

if(isset($_SESSION['usuario'])){
  header('Location: register.php');
}

if($_SERVER['REQUEST_METHOD']=='POST'){
    $usuario =$_POST['email'];
    $password =password_hash($_POST['password'], PASSWORD_BCRYPT);
    require('librerias/database.php');
    $consulta = $conn -> prepare('SELECT email,password FROM usuario WHERE EMAIL=:email AND PASSWORD=:password');
    $consulta ->execute(array(':email'=>$usuario,':password'=> $password));

    $resultado= $consulta ->fetch();
    if($resultado!==false){
        $_SESSION['usuario']=$usuario;
        header('Location: Agregar.php');
    }else{
        header('Location: login.php');
  
    }

}
?>
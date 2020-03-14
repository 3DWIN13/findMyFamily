<?php


$server = 'localhost';
$username = 'root';
$password = '';
$database = 'proyecto';

try{
    $conn = new PDO("mysql:host=$server;dbname=$database;",$username, $password);
}catch(PDOException $e){
    die('Conecction Failed: '.$e->getMessage());
} 

if(isset($_POST['submit'])){
    $corre=$_POST['email'];
    $pass=$_POST['password'];
    $sql="select * from usuario where emai='".$corre."' and password='".$pass."'";
    $result=odbc_exec($conn, $sql);
    $count=obdc_fetch_row($result);
    if($count == 1){
        $_SESSION['log']=1;
        header('Location: register.php');
        session_start();
    }
  elseif($count==null)
  {
    header('Location: register.php');
  }
}

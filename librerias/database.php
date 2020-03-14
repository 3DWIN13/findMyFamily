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

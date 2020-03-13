     <?php

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','inta');

define('IS_DEBUG', true);

try{
    $conn = new PDO("mysql:host=$server;dbname=$database;",$username, $password);
}catch(PDOException $e){
    die('Conecction Failed: '.$e->getMessage());
}

?>
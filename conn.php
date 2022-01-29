<?php 

$host = "localhost";
$user = "root";
$pass = "king1234";
$db   = "quiz";
$conn = null;


$options = array(/*PDO::MYSQL_ATTR_SSL_CA => '/var/www/html/BaltimoreCyberTrustRoot.crt.pem'*/);
try {
  $conn = new PDO("mysql:host={$host};dbname={$db};",$user,$pass,$options);
} catch (Exception $e) {
  
}


 ?>
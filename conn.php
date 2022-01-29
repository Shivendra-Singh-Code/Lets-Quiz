<?php 

$host = "frtsql.mysql.database.azure.com";
$user = "letsquizad";
$pass = "King1234";
$db   = "quiz";
$conn = null;


$options = array(DigiCertGlobalRootCA.crt.pem);
try {
  $conn = new PDO("mysql:host={$host};dbname={$db};",$user,$pass,$options);
} catch (Exception $e) {
  
}


 ?>

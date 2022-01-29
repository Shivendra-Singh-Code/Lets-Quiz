<?php 

$host = "frtsql.mysql.database.azure.com";
$user = "letsquizad";
$pass = "King1234";
$db   = "quiz";
//$conn = null;



$options = array(PDO::MYSQL_ATTR_SSL_CA => '../DigiCertGlobalRootCA.crt.pem');
try {
  $conn = new PDO("mysql:host={$host};port=3306;dbname={$db};",$user,$pass,$options);
} catch (Exception $e) {
  
}



?>

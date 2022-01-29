<?php 

$host = "frtsql.mysql.database.azure.com";
$user = "letsquizad";
$pass = "King1234";
$db   = "quiz";
$conn = null;


$conn = mysqli_init(); mysqli_ssl_set($con,NULL,NULL, "../SSL/DigiCertGlobalRootCA.crt.pem", NULL, NULL); 
mysqli_real_connect($conn, $host, $user, $pass, $db, 3306, MYSQLI_CLIENT_SSL);

/*$options = array(DigiCertGlobalRootCA.crt.pem);
try {
  $conn = new PDO("mysql:host={$host};dbname={$db};",$user,$pass,$options);
} catch (Exception $e) {
  
}*/


 ?>

<?php 

$host = "frtsql.mysql.database.azure.com";
$user = "letsquizad";
$pass = "Shivendra@23";
$db   = "quiz1";
//$conn = null;



$conn = mysqli_init(); mysqli_ssl_set($con,NULL,NULL, "../DigiCertGlobalRootCA.crt.pem", NULL, NULL); 
mysqli_real_connect($conn, "frtsql.mysql.database.azure.com", "letsquizad", "Shivendra@23", "quiz1", 3306, MYSQLI_CLIENT_SSL);



?>

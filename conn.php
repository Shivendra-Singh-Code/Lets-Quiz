<?php 

$host = "frtsql.mysql.database.azure.com";
$user = "letsquizad";
$pass = "Shivendra@23";
$db   = "quiz1";
//$conn = null;



try {
  $conn = new PDO("mysql:host={$host};dbname={$db};",$user,$pass);
} catch (Exception $e) {
  



?>

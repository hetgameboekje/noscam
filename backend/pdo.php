<?php   
$servername = "localhost";
$username = "admin";
$password = "admin";
$database = "oma"; 

try {
  $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
  // set the PDO error mode to exception

  $_SESSION["code"] = "connection succesfull";
} catch(PDOException $e) {
  $_SESSION["code"] = "connection failed";
}



$_SESSION["database"] = $database;
?>

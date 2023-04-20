<?php   
$servername = "localhost";
$username = "admin";
$password = "admin";
$database = "oma"; 

try {
  $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $_SESSION["code"] = "connection succesfull";
} catch(PDOException $e) {
  $_SESSION["code"] = "connection failed";
}



$_SESSION["database"] = $database;
?>

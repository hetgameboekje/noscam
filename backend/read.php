<?php

$sql = "SELECT * FROM user";
$stmt = $conn->prepare($sql);
$stmt->execute();
$_SESSION["rowArray"] = $stmt;

?>
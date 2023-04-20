<?php

$sql = "SELECT * FROM user";
$stmt = $conn->prepare($sql);

$stmt->execute();

$stmt = $stmt->fetchAll();

$_SESSION["rowArray"] = $stmt;

?>
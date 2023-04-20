<?php
session_start();
require_once "pdo.php";
require_once "read.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
</head>

<body>
    <hr>
    <h1>Main Page</h1>
    <a href="pdo.php">hello</a> <br>
    <?php echo $_SESSION["code"] . "<br>";
    echo $_SESSION["name"] . "<br>" . $_SESSION["email"] . "<br>";
    echo "Connected database: " . $_SESSION["database"] . "<hr>";

    $stmt = $_SESSION["rowArray"];
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        // Output the data for each row
        while ($row = $stmt->fetch()) {
            $_SESSION["id"] = $row["id"];
            $_SESSION["name"] = $row["name"];
            $_SESSION["email"] = $row["email"];
            echo $_SESSION["name"]. "<br>";
            echo $_SESSION["email"]. "<br>";
        }
    } else {
        echo "No results found";
    }



    ?>
</body>

</html>
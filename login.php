<?php
$dsn = 'mysql:dbname=acsm_4729051611eebc5;host=us-cdbr-azure-southcentral-e.cloudapp.net';
$db_user = "b5e6932691e7ad";
$db_password="431dfc7a";

try {
    $conn = new PDO($dsn, $db_user, $db_password);
} catch (PDOException $e) {
    echo "Connection faileds: " . $e->getMessage();
}

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "" && $password == "") {
    echo "empty";
} else {
    $stmt = "SELECT * FROM users WHERE username=? AND password=?";
    $query = $conn->prepare($stmt);
    $query->bindParam(1, $username);
    $query->bindParam(2, $password);

    $query->execute();

    if ($query->rowCount() == 1) {
        $_SESSION["auth"] = true;
        $_SESSION["username"] = $username;

        echo "success";

        // echo $_SESSION["auth"];
    } else {
        echo "error";
    }
}
?>
<?php

$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "sl_learning";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("Something went wrong;");
}

?>
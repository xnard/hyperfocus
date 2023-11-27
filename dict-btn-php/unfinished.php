<?php
session_start(); // Start the session at the beginning of your PHP script
require_once "C:\Users\Denard\Sign_language_learning\Sign_language_learning\database.php";

if (!isset($_SESSION["user"])) {
    header("Location: login.php"); // Redirect if not logged in
    exit(); // Terminate the current script
}
$user_id = $_SESSION["user_id"];
$username = $_SESSION["user"];
// Retrieve the user's email from the session
$email = $_SESSION["email"];

// Create connection
$conn = new mysqli($hostName, $dbUser, $dbPassword, $dbName);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Item and progress information
$item_id = 125; //item ID
$progress_status = 'unfinished'; //progress status
$sql = "INSERT INTO progress (user_id, item_id, progress_status) VALUES ($user_id, $item_id, '$progress_status')";

$result = mysqli_query($conn, $sql);

// Check if the query was successful
if ($result) {
    echo "Progress information inserted successfully!";
} else {
    echo "Error: " . mysqli_error($conn);
}
// Close the database connection
mysqli_close($conn);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <script src="JS\progress.js"></script>

</body>

</html>
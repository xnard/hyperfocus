<!DOCTYPE html>
<html lang="en">

<head>
    
</head>

<body>
    <?php
    session_start(); // Start the session at the beginning of your PHP script
    
    if (!isset($_SESSION["user"])) {
        header("Location: login.php"); // Redirect if not logged in
        exit(); // Terminate the current script
    }

    $user_id = $_SESSION["user_id"];
    $username = $_SESSION["user"];
    // Retrieve the user's email from the session
    $email = $_SESSION["email"];

    include('database.php'); // Include connection to database
    
    $item_name = $_POST['item_name'];
    $status = $_POST['status'];

    if (!$item_name || !$status) {
        echo 'Invalid data';
        exit;
    }

    $sql = "INSERT INTO progress (user_id, item_name, progress_status) VALUES (?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iss", $user_id, $item_name, $status);

    if ($stmt->execute()) {
        // Display success message in a pop-up box
        echo '<script>';
        echo 'alert("Progress information inserted successfully!");';
        echo 'window.history.back();'; // Go back to the previous page
        echo '</script>';
    } else {
        // Display error message in a pop-up box
        echo '<script>';
        echo 'alert("Error inserting progress information: ' . $stmt->error . '");';
        echo 'window.history.back();'; // Go back to the previous page
        echo '</script>';
    }

    $stmt->close();
    $conn->close(); // Close database connection
    ?>

</body>

</html>
<?php
session_start();
if (isset($_SESSION["user"])) {
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="Styling//base.css">
    <link rel="stylesheet" href="Styling//style.css">


    <script>
        document.addEventListener('keydown', function (event) {
            if (event.keyCode === 13) { // Enter key pressed
                // Get the next input field
                const nextInput = document.activeElement.nextElementSibling;

                // If there's a next input field, focus on it
                if (nextInput) {
                    nextInput.focus();
                }

                // If the focused element is the submit button, submit the form
                if (document.activeElement === document.querySelector('form input[type="submit"]')) {
                    document.querySelector('form').submit();
                }

                // Prevent default form submission
                event.preventDefault();
            }
        });
    </script>


</head>

<body>
    <div class="container">
        <?php
        if (isset($_SESSION["user"])) {
            header("Location: index.php"); // Redirect if already logged in
            exit(); // Terminate the current script
        }

        if (isset($_POST["login"])) {
            $email = $_POST["email"];
            $password = $_POST["password"]; // Password entered by the user
        
            require_once "database.php";
            $sql = "SELECT * FROM users WHERE email = ?";
            $stmt = mysqli_stmt_init($conn);

            if (mysqli_stmt_prepare($stmt, $sql)) {
                mysqli_stmt_bind_param($stmt, "s", $email);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);

                if ($row = mysqli_fetch_assoc($result)) {
                    $hashedPassword = $row["password"]; // Hashed password retrieved from the database
        
                    // Verify the entered password with the hashed password from the database
                    if (password_verify($password, $hashedPassword)) {
                        // Passwords match, user is authenticated
                        echo "<div class='alert alert-success'>Login successful.</div>";
                        $_SESSION["user_id"] = $row["user_id"];
                        $_SESSION["user"] = $row["username"]; // Store the username in the session variable
                        $_SESSION["email"] = $row["email"]; // Store the user's email in the session variable
                        header("Location: index.php");
                        exit(); // Terminate the current script
                    } else {
                        // Passwords do not match
                        echo "<div class='alert alert-danger'>Invalid password.</div>";
                    }
                } else {
                    // User not found
                    echo "<div class='alert alert-danger'>User not found.</div>";
                }

                mysqli_stmt_close($stmt);
            } else {
                die("Something went wrong");
            }
        }
        ?>

        <h2 class="form-title">Sign in</h2>
        <p class="form-description">Login to your account.</p>
        <form action="login.php" method="post">
            <div class="form-group">
                <input type="email" placeholder="Enter Email" name="email" class="form-control">
            </div>
            <div class="form-group">
                <input type="password" placeholder="Enter Password" name="password" class="form-control">
            </div>
            <div class="form-btn">
                <input type="submit" value="Login" name="login" class="btn btn-primary">
            </div>
            <div>
        </form>

        <p class="redirect-text">Not Registered Yet? <a href="registration.php">Register Here</a></p>
    </div>
    </div>
</body>

</html>
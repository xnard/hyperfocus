<?php
session_start(); // Start the session at the beginning of your PHP script

if (!isset($_SESSION["user"])) {
    header("Location: login.php"); // Redirect if not logged in
    exit(); // Terminate the current script
}
$username = $_SESSION["user"];
// Retrieve the user's email from the session
$email = $_SESSION["email"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>FSL Learning</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="Styling//index.css">
</head>

<body>
    <div class="container-fluid p-0 d-flex h-100">
        <div id="bdSidebar"
            class="d-flex flex-column flex-shrink-0 p-3 bg-success text-white offcanvas-md offcanvas-start"
            style="width: 280px;">
            <a href="#" class="navbar-brand">
                <h5><i class="fa-solid fa-hands-asl-interpreting" style="font-size: 28px;"></i> FSL Learning</h5>
            </a>
            <hr>
            <ul class="mynav nav nav-pills flex-column mb-auto">
                <li class="nav-item mb-1">
                    <a href="index.php" class="active">
                        <i class="fa-solid fa-house"></i>
                        Home
                    </a>
                </li>
                <li class="nav-item mb-1">
                    <a href="learn_fsl.php" class="">
                        <i class="fa-solid fa-hands"></i>
                        Learn FSL
                    </a>
                </li>
                <li class="nav-item mb-1">
                    <a href="dictionary.php" class="">
                        <i class="fa-solid fa-book-open"></i>
                        Dictionary
                    </a>
                </li>
                <li class="nav-item mb-1">
                    <a href="profile.php" class="">
                        <i class="fa-solid fa-user"></i>
                        Profile
                    </a>
                </li>
                <li class="nav-item mb-1">
                    <a href="logout.php" class="">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        Logout
                    </a>
                </li>
            </ul>
            </ul>
            <hr>
            <div class="d-flex">
                <img src="Media//person-badge-fill.svg" class="img-fluid rounded me-2" width="50px" alt="">
                <span>
                    <h6 class="mt-1 mb-0">
                        <?php echo $username; ?>
                    </h6>
                    <small>
                        <?php echo $email; ?>
                    </small>
                </span>
            </div>
        </div>

        <div class="bg-light flex-fill">
            <div class="p-2 d-md-none d-flex text-white bg-success">
                <a href="#" class="text-white" data-bs-toggle="offcanvas" data-bs-target="#bdSidebar">
                    <i class="fa-solid fa-bars"></i>
                </a>
                <span class="ms-3">FSL Learning</span>
            </div>
            <div class="p-4">
                <nav style="--bs-breadcrumb-divider:'>';font-size:14px">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><i class="fa-solid fa-house"></i></li>                        
                        <li class="breadcrumb-item">Home</li>
                    </ol>
                </nav>
                <div class="d-flex justify-content-between">
                    <h5>Home</h5>
                    <button class="btn btn-sm btn-light"><i class="fa-solid fa-download"></i> Download</button>
                </div>
                <hr>
                <div class="row">
                    <div class="col">
                        <p>Page content goes here</p>
                    </div>
                </div>
            </div>

        </div>


    </div>
</body>

</html>
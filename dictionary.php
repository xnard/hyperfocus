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
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
        </script>

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
                    <a href="index.php">
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
                    <a href="dictionary.php" class="active">
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

        <div class="main-content bg-light flex-fill">
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
                        <li class="breadcrumb-item">Dictionary</li>
                    </ol>
                </nav>
                <div class="d-flex justify-content-between">
                    <h5>FSL Dictionary</h5>
                </div>

                <hr>
                <div class="d-flex justify-content-between">
                    <h5>Alphabets</h5><br><br>
                </div>
                <div class="row">
                    <!-- A -->
                    <div class="col-4">
                        <div class="card">
                            <img class="img-fluid"
                                src="dataset\fsl_alphabets\A\5-2-_jpg.rf.a53843addc24b99d6d1eda19cbbe757c.jpg"
                                alt="Letter A" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">A</h5>
                                <div class="accordion" id="accordionA">
                                    <div class="accordion-item me-2 mb-2">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseOneA"
                                                aria-expanded="false" aria-controls="collapseOne">
                                                Instruction
                                            </button>
                                        </h2>
                                        <div id="collapseOneA" class="accordion-collapse collapse"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>To sign the letter A in Filipino Sign Language (FSL), follow these
                                                    steps:</p>
                                                <ul>
                                                    <li>Position your dominant hand in a relaxed fist, with your thumb
                                                        resting on top of your fingers.</li>
                                                    <li>Extend your index finger straight up, while keeping the rest of
                                                        your fingers curled inside your fist.</li>
                                                    <li>Bring your extended index finger down to touch the tip of your
                                                        thumb.</li>
                                                    <li>Hold this position momentarily to signify the letter A.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="dropdown progress-buttons">
                                    <button class="btn btn-secondary dropdown-toggle" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false" id="statusButton-alphabet-a">
                                        Select Status
                                    </button>
                                    <ul class="dropdown-menu">
                                        <form action="update_progress.php" method="POST">
                                            <input type="hidden" name="item_name" value="alphabet-a">
                                            <li><button class="dropdown-item" type="submit" name="status"
                                                    value="Learned">Learned</button></li>
                                            <hr>
                                            <li><button class="dropdown-item" type="button"
                                                    id="clearSelection-alphabet-a">Clear Selection</button></li>
                                        </form>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- B -->
                    <div class="col-4">
                        <div class="card">
                            <img class="img-fluid" src="dataset\fsl_alphabets\B\B_185.jpg" alt="Letter B"
                                class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">B</h5>
                                <div class="accordion" id="accordionB">
                                    <div class="accordion-item me-2 mb-2">
                                        <h2 class="accordion-header" id="headingOneB">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseOneB"
                                                aria-expanded="false" aria-controls="collapseOne">
                                                Instruction
                                            </button>
                                        </h2>
                                        <div id="collapseOneB" class="accordion-collapse collapse"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>To sign the letter B in Filipino Sign Language (FSL), follow these
                                                    steps:</p>
                                                <ul>
                                                    <li>Raise one hand to your side.</li>
                                                    <li>Keep your fingers straight and close to each other
                                                        so they are touching on the sides.</li>
                                                    <li>Your palm should be flat and facing out.</li>
                                                    <li>Tuck your thumb in across the front of your palm</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="dropdown progress-buttons">
                                    <button class="btn btn-secondary dropdown-toggle" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false" id="statusButton-alphabet-b">
                                        Select Status
                                    </button>
                                    <ul class="dropdown-menu">
                                        <form action="update_progress.php" method="POST">
                                            <input type="hidden" name="item_name" value="alphabet-b">
                                            <li><button class="dropdown-item" type="submit" name="status"
                                                    value="Learned">Learned</button></li>
                                            <hr>
                                            <li><button class="dropdown-item" type="button"
                                                    id="clearSelection-alphabet-b">Clear Selection</button></li>
                                        </form>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- C -->
                    <div class="col-4">
                        <div class="card">
                            <img class="img-fluid" src="dataset\fsl_alphabets\C\308.jpg" alt="Letter C"
                                class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">C</h5>
                                <div class="accordion" id="accordionC">
                                    <div class="accordion-item me-2 mb-2">
                                        <h2 class="accordion-header" id="headingOneC">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseOneC"
                                                aria-expanded="false" aria-controls="collapseOne">
                                                Instruction
                                            </button>
                                        </h2>
                                        <div id="collapseOneC" class="accordion-collapse collapse"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>To sign the letter B in Filipino Sign Language (FSL), follow these
                                                    steps:</p>
                                                <ul>
                                                    <li>Raise one hand to your side.</li>
                                                    <li>Keep your fingers straight and close to each other
                                                        so they are touching on the sides.</li>
                                                    <li>Your palm should be flat and facing out.</li>
                                                    <li>Tuck your thumb in across the front of your palm</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="dropdown progress-buttons">
                                    <button class="btn btn-secondary dropdown-toggle" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false" id="statusButton-alphabet-c">
                                        Select Status
                                    </button>
                                    <ul class="dropdown-menu">
                                        <form action="update_progress.php" method="POST">
                                            <input type="hidden" name="item_name" value="alphabet-c">
                                            <li><button class="dropdown-item" type="submit" name="status"
                                                    value="Learned">Learned</button></li>
                                            <hr>
                                            <li><button class="dropdown-item" type="button"
                                                    id="clearSelection-alphabet-c">Clear Selection</button></li>
                                        </form>
                                    </ul>
                                </div>


                            </div>
                        </div>
                    </div>

                </div>

            </div>


        </div>

        <script src="JS\progress.js"></script>
        <script src="JS\dropdown_btn.js"></script>

</body>

</html>
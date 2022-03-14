<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- CSS only bootstarp-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- fontawesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--google font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <!-- owl carousel  -->
    <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">

    <!-- css  -->
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <!-- nav tab  -->
    <div style="background-color:#1179EE ;">
        <nav class="nav container justify-content-between">
            <div>
                <?php if (isset($_SESSION['user'])) : ?>
                    <a class="nav-link top-contact" href="profile.php"><i class="fa-solid fa-user"></i>&nbsp;
                        Signed in as <?= $_SESSION['user']['user_name'] ?> with <?= $_SESSION['user']['user_email'] ?></a>
                <?php endif; ?>
            </div>
            <div class="d-flex justify-content-evenly" style="background-color:orange;">
                <?php if (empty($_SESSION['user'])) : ?>
                    <a class="nav-link top-nav" href="login.php">Login &nbsp;<i class="fa-solid fa-arrow-right-to-bracket"></i></a>
                    <a class="nav-link top-nav" href="register.php">Sign Up &nbsp;<i class="fa-solid fa-user-plus"></i></a>
                <?php else : ?>
                    <a class="nav-link top-nav" href="profile.php"><i class="fa-solid fa-address-card"></i> &nbsp;Profile</a>
                    <a class="nav-link top-nav" href="_actions/logout.php">Logout &nbsp;<i class="fa-solid fa-arrow-right-from-bracket"></i></a>
                <?php endif; ?>
            </div>
        </nav>
    </div>
    <!-- nav menu  -->
    <nav id="navbar_top" class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid container">
            <a class="navbar-brand" href="/"><img src="images/logo.png" alt="logo" width="40"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item p-2">
                        <a class="nav-link" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item p-2">
                        <a class="nav-link" href="aboutus.php">About Us</a>
                    </li>
                    <li class="nav-item p-2 dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="">Courses</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="primary.php">Primary</a></li>
                            <li><a class="dropdown-item" href="secondary.php">Secondary</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="summer.php">Summer Programs</a></li>
                        </ul>
                    </li>
                    <li class="nav-item p-2">
                        <a class="nav-link" href="">Activities</a>
                    </li>
                    <li class="nav-item p-2">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
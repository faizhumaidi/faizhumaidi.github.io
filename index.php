<!DOCTYPE html>
<html lang="en">
<head>
    <title>Portfolio - Faiz Humaidi</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="images/logo/favicon-primary.ico" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

    <style>
        .profile-image {
            background-size: contain; /* Makes the image fit within the container */
            background-repeat: no-repeat; /* Prevents tiling */
            background-position: center; /* Centers the image */
            height: auto; /* Adjusts the height as needed */
        }

        .stack {
            margin-left: 0;
            padding-left: 0;
            list-style: none;
            color: #FFFFFF;
        }
    </style>
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

<!-- navbar section -->
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="./index.php">
            <img src="images/logo/logo_primary_without_text.png" alt="logo" class="pb-1" style="height: 32px"/>
            Portfolio</a>
        <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav nav ml-auto">
                <li class="nav-item"><a href="#home-section" class="nav-link"><span>Home</span></a></li>
                <li class="nav-item"><a href="#about-section" class="nav-link"><span>About</span></a></li>
                <li class="nav-item"><a href="#services-section" class="nav-link"><span>Services</span></a></li>
                <li class="nav-item"><a href="#skills-section" class="nav-link"><span>Skills</span></a></li>
                <li class="nav-item"><a href="#projects-section" class="nav-link"><span>Projects</span></a></li>
                <li class="nav-item"><a href="#experience-section" class="nav-link"><span>Experience</span></a></li>
                <li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact</span></a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- home section -->
<?php include './home.php' ?>

<!-- about section -->
<?php include './about.php' ?>

<!-- services section -->
<?php include './services.php' ?>

<!-- skills section -->
<?php include './skills.php' ?>

<!-- projects section -->
<?php include './projects.php' ?>

<!-- experience section -->
<?php include './experience.php' ?>

<!-- counter section -->
<?php include './counter.php' ?>

<section class="ftco-section ftco-hireme img margin-top" style="background-image: url(images/bg_1.jpg)">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7 ftco-animate text-center">
                <h2>I'm <span>Available</span> for freelancing</h2>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <p class="mb-0"><a href="#" class="btn btn-primary py-3 px-5">Hire me</a></p>
            </div>
        </div>
    </div>
</section>

<!-- contact section -->
<?php include './contact.php' ?>

<!-- footer -->
<?php include './footer.php' ?>

<!-- loader -->
<?php include './loader.php' ?>

<!-- script -->
<?php include './script.php' ?>

</body>
</html>
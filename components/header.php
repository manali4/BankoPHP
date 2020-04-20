<!doctype html>
<html lang="en" class="h-100">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    <title>Banko Game</title>
</head>

<body class="h-100">
    <header role="navbar">
        <nav class="navbar bg-white fixed-top">
            <div class="navbar-brand ">
                <img src="images/Banko.svg" height="30" alt="">
            </div>
            <?php
            if($_SERVER['PHP_SELF'] != "/bankoPHP/index.php")
            echo '<div class="ok"><a class="btn px-3 btn-outline-danger" href="signout.php">Sign Out</a></div>';
            ?>
        </nav>
    </header>
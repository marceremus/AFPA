<?php
session_start();
$_SESSION['marc'] = 'toto';
var_dump($_SESSION['login']);
if(isset($_SESSION['login'])){
    $email = $_SESSION['login'];

}else{
    $_SESSION['login'] = $_POST['email'];
    $email = $_SESSION['login'];
}
var_dump($_SESSION['marc']);
var_dump($_SESSION['login']);
var_dump($email);
?>

<!doctype html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Identifier vous</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/">Connexion</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item ">
                <a class="nav-link" href="/">Home </a>
            </li>
            <?php
            if($email === "marceremus@gmail.com") {
                ?>
                <li class="nav-item active">
                    <a class="nav-link" href="page1.php">Page 1</a>
                </li>
                <?php
            }
            ?>
            <li class="nav-item">
                <a class="nav-link" href="page2.php">Page 2</a>
            </li>
            <?php
            if($email === "marceremus@gmail.com") {
                ?>
                <li class="nav-item active">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
                <?php
            }
            ?>
        </ul>
    </div>
</nav>
<div class="container">

    <div class="mt-5 mb-5">
        <h1>Je n'ai pas les droits</h1>
    </div>
    <?php
    if($email === "marceremus@gmail.com") {
        ?>
        <div class="row">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae culpa deserunt impedit inventore
                laudantium maxime nihil nobis sed! Accusantium architecto cumque delectus ea molestias nihil nobis omnis
                quis repellat sed!</p>
        </div>
        <div class="row">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae culpa deserunt impedit inventore
                laudantium maxime nihil nobis sed! Accusantium architecto cumque delectus ea molestias nihil nobis omnis
                quis repellat sed!</p>
        </div>
        <div class="row">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae culpa deserunt impedit inventore
                laudantium maxime nihil nobis sed! Accusantium architecto cumque delectus ea molestias nihil nobis omnis
                quis repellat sed!</p>
        </div>
        <div class="row">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae culpa deserunt impedit inventore
                laudantium maxime nihil nobis sed! Accusantium architecto cumque delectus ea molestias nihil nobis omnis
                quis repellat sed!</p>
        </div>
        <?php
    }else{
        ?>
        <div class="row">
            <div class="alert alert-danger" role="alert">
                <p>Vous n'avez pas les droits pour voir le contenue de cette page</p>
            </div>
        </div>
    <?php
    }
    ?>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>


<?php
require 'src/views/elements/head.php';
require 'src/views/elements/footer.php';
require 'src/views/elements/nav.php';

headPage('Accueil');
nav('src/views/');

?>

    <div class="container mb-5">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="https://picsum.photos/id/238/900/300" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://picsum.photos/id/234/900/300" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://picsum.photos/id/249/900/300" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div class="jumbotron">
            <h1 class="display-4">Bienvenue sur IMMO-Blier!!</h1>
            <p class="lead">Le site de ventes et locations de biens immobiliers de Bernard Blier!</p>
            <hr class="my-4">
            <p>Chez moi on ne vends pas, on ventile!!</p>
            <p class="lead">
                <a class="btn btn-outline-dark btn-lg" href="src/views/biens.php" role="button">Voir les biens</a>
            </p>
        </div>
    </div>
<?php

footer();


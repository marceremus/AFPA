<?php
require 'elements/head.php';
require 'elements/footer.php';
require 'elements/nav.php';

headPage('Accueil');

nav('');

?>

    <div class="container mb-5">

        <div>
            <h2>Contactez nous</h2>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6  col-lg-6  col-xl-6">
                <form class="mt-5">

                    <!-- Nom  -->
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="nom">Nom</label>
                            <input type="text" class="form-control" id="nom" placeholder="Votre nom">
                        </div>
                    </div>

                    <!-- prénom  -->
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="prenom">Prénom</label>
                            <input type="text" class="form-control" id="prenom" placeholder="Votre prénom">
                        </div>
                    </div>


                    <!-- Nom  -->
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Email">
                        </div>
                    </div>

                    <!-- Sujet  -->
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="sujet">Sujet</label>
                            <input type="text" class="form-control" placeholder="Sujet" id="sujet">
                        </div>
                    </div>

                    <!-- Message  -->
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="message">Message</label>
                            <textarea type="text" class="form-control" id="message"></textarea>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-outline-secondary">Envoyer</button>
                </form>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6  col-lg-6  col-xl-6 mt-5">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10165.462850644237!2d2.8071097344365343!3d50.434288369956704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47dd307d659025fd%3A0xb92f8bd91a43659a!2zQ29sbMOoZ2UgSmVhbiBKYXVyw6hz!5e0!3m2!1sfr!2sfr!4v1586439142378!5m2!1sfr!2sfr" width="500" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>

    </div>
<?php

footer();
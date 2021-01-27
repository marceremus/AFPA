<?php
	/*
	 * Template name: acceuil
	 */

	get_header();

?>
<?php
	slider();

?>
    <!--FICHE VELO ELECTRIQUE-->
    <section>
        <div class="card my-4 w-75 mx-auto bg-light">
            <img src="<?php echo get_template_directory_uri();?>/img/test-velo-mad-in-france-1.jpg" class="card-img-bottom d-block mx-auto" alt="photo_velo_elec">
            <div class="card-body border border-dark ">
                <h4 class="card-text text-center">Vélo Electrique :<p class="font-weight-bold text-center"> Bryte E-go - BATAVUS</h4>
                <a href="reservation" class="d-block btn btn-dark stretched-link btn-center">Louez Moi</a>
            </div>
    </section>

    <!--FICHE VELO CLASSIQUE-->
    <section>
        <div class="card my-4 w-75 mx-auto bg-light">
            <img src="<?php echo get_template_directory_uri();?>/img/velo_classique_new.png" class="card-img-bottom d-block mx-auto mx-auto" alt="photo_velo_classique">
            <div class="card-body border border-dark ">
                <h4 class="card-text text-center"> Vélo Classique :<p class="font-weight-bold text-center">Matra I-flow - CLASSIC </h4>
                <a href="reservation" class="d-block btn btn-dark stretched-link y-auto ">Louez Moi</a>
            </div>
    </section>

<?php
	get_footer();

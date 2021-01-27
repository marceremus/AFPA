<?php
	/*
	* Template name: contact
	*/

	get_header();

?>
    <section>

        <h2>Page contact</h2>

        <form method="POST">
            <div class="form-group">
                <label for="nom">Nom</label>
                <input name="nom" type="text" class="form-control" id="nom">
            </div>
            <div class="form-group">
                <label for="prenom">Prénom</label>
                <input name="prenom" type="text" class="form-control" id="prenom">
            </div>

            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>

            <div class="form-group">
                <label for="commentaires">Commentaires</label>
                <textarea class="form-control" id="commentaires" name="commentaires" rows="3"></textarea>
            </div>

            <div class="custom-file">
                <button type="submit" class="btn btn-primary">Enregistrer</button>

        </form>
    </section>
<?php
	get_footer();

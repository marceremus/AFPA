<?php
?>
<h3>Nous contacter</h3>
<?php
	$form = new \src\Models\Form\Form();
	echo $form->getInputText("email", "email", "email", "Email : ");
	echo $form->getInputText("password", "password", "password","Mot de passe : ");
	echo $form->getButton("button", "Enregistrer", "btn btn-success");


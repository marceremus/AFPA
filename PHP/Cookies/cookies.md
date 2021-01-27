# AFPA-PHP
## Cookies

Un cookie est un petit fichier texte (faisant au maximum 65 Ko) stocké sur le disque dur du visiteur du site. 

Ce fichier texte permet de sauvegarder diverses informations concernant ce visiteur afin de pouvoir les réutiliser (les informations) lors de la prochaine visite du visiteur sur ce même site.

Par exemple, on pourrait très bien stocker dans ce cookie le nom du visiteur et par la suite, afficher son nom à chaque fois qu'il se connectera sur le site (ceci bien sur, s'il n'efface pas les cookies de son disque dur).

Cependant, tout cela n'arrive pas par le saint esprit.
En effet, ceci n'est possible que si le visiteur à entré lui-même ses informations dans un formulaire sur le site.

Les cookies sont stockés, selon votre navigateur Internet, à un certain endroit de votre disque dur. Par exemple, avec un système composé de Windows et du navigateur INTERNET EXPLORER (le plus usité).
Dans cette configuration, les cookies sont stockés dans le répertoire C:WindowsTemporary Internet Files comme ci-dessous :

Voyons à présent comment créer de tels cookies, grâce à la fonction setcookie().

Soit alors la portion de code suivante :

exemple1.php

	1. <?php
	2. // on définit une durée de vie de notre cookie (en secondes), donc un an dans notre cas
	
	3. $temps = 365*24*3600;
	
	4. // on envoie un cookie de nom pseudo portant la valeur LA GLOBULE
	
	5. setcookie ("pseudo", "LA GLOBULE", time() + $temps);
	6. ?>

Explications :

Grâce à ce code, nous venons d'envoyer, chez le client (donc le visiteur du site) un cookie de nom pseudo portant la valeur LA GLOBULE.

De plus, time() retournant le nombre de secondes écoulées depuis le 1er janvier 1970 jusqu'à l'instant présent, nous imposons que le cookie ai une durée de vie de un an (soit en fait l'instant présent plus un an, donc un an).

Enfin, maintenant, si le visiteur ne supprime pas ce cookie, et bien, dans toutes les pages WEB de notre site, on pourra accéder à la variable $pseudo qui contiendra la chaîne de caractères LA GLOBULE.

En revanche, l'envoie d'un cookie ayant la même valeur pour tous les visiteurs d'un site, ce n'est pas vraiment intéressant.

Supposons alors que sur une page de notre site WEB, nous souhaitons faire en sorte que si le visiteur vient pour la première fois (ou qu'il a supprimer ses cookies), et bien, il aurait alors, la possibilité de saisir son nom dans un formulaire, ou bien s'il ne s'agit pas de sa première visite, d'afficher tout simplement Bonjour puis son nom.

On aurait alors le code suivant pour notre page (par exemple index.php) :

exemple2.php

	1. <html>
	2. <head>
	3. <title>Index du site</title>
	4. <body>
	5. <?
	6. // on teste la déclaration de notre cookie
	7. if (isset($_COOKIE['pseudo'])) {
	8. echo 'Bonjour '.$_COOKIE['pseudo'].' !';
	9. }
	10. else {
	11. echo 'Notre cookie n\'est pas déclaré.';
	12. // si le cookie n'existe pas, on affiche un formulaire permettant au visiteur de saisir son nom
	13. echo '<form action="./traitement.php" method="post">';
	14. echo 'Votre nom : <input type = "texte" name = "nom"><br />';
	15. echo '<input type = "submit" value = "Envoyer">';
	16. }
	17. ?>
	18. </body>
	19. </html>



Et le code pour la page traitement.php :

exemple3.php

	1. <?php
	2. If (isset($_POST['nom'])) {
	
	3. // on définit une durée de vie de notre cookie (en secondes), donc un an dans notre cas
	4. $temps = 365*24*3600;
	
	5. // on envoie un cookie de nom pseudo portant la valeur de la variable $nom, c'est-à-dire la valeur qu'a saisi la personne qui a rempli le formulaire
	6. setcookie ("pseudo", $_POST['nom'], time() + $temps);
	
	7. }
	8. // on effectue une redirection vers la page d'accueil
	9. redirection ('index.php');
	10. }
	11. else {
	12. echo 'La variable du formulaire n\'est pas déclarée.';
	13. }
	14. ?>


Attention !!!

Plusieurs conditions sont à respecter afin que l'utilisation des cookies se passe au mieux :
• l'envoie d'un cookie doit être la première fonction PHP que vous utilisez dans votre script, ce qui veut dire que vous devez utiliser la fonction setcookie() tout en haut de votre script (AUCUN AFFICHAGE ET AUCUN CODE CODE HTML AVANT UN SETCOOKIE). Si d'autres fonctions interviennent avant l'envoie du cookie, celui-ci ne fonctionnera pas.
• Si vous envoyé un cookie sur un poste client celui-ci effacera automatiquement l'ancien cookie qui portait le même nom (si il y en avait un), autrement il le créera.

Note : Pour effacer un cookie, vous devez lancer un cookie qui aura le même nom que le cookie que vous voulez effacer, tout en lui donnant une valeur nulle (vous pouvez également l'envoyer avec un temps de vie dépassé).

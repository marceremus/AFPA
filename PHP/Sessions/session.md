# AFPA-PHP
## Session

Afin de transmettre des variables de pages en pages, plusieurs possibilités s'offrent à vous :
	• les divers champs des formulaires, qu'ils soient hidden ou non.
	• passer les variables directement à travers les liens.
	• utiliser les cookies.
	• utiliser les sessions.

Fonction	Signification
session_start	Démarre une session
session_register	Enregistre une variable de session
session_unregister	Efface une variable de session
session_is_registered	Vérifie si une variable est déclarée pour la session en cours
session_id	Retourne l'id de la session en cours
session_name	Retourne le nom de la session en cours
session_unset	Detruit toutes les variables de la session en cours
session_destroy	Destruit la session en cours

1. // on la démarre :)
2. session_start ();

3. // on enregistre les paramètres de notre visiteur comme variables de session ($login et $pwd) (notez bien que l'on utilise pas le $ pour enregistrer ces variables)
4. $_SESSION['login'] = $_POST['login'];
5. $_SESSION['pwd'] = $_POST['pwd'];

1. // On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
2. session_start ();

3. // On récupère nos variables de session
4. if (isset($_SESSION['login']) && isset($_SESSION['pwd'])) {

5. // On teste pour voir si nos variables ont bien été enregistrées
6. echo '<html>';
7. echo '<head>';
8. echo '<title>Page de notre section membre</title>';
9. echo '</head>';
10. echo '<body>';
11. 
12. echo 'Votre login est '.$_SESSION['login'].' et votre mot de passe est '.$_SESSION['pwd'].'.';
13. 
14. echo '<br />';
15. 
16. // On affiche un lien pour fermer notre session
17. echo '<a href="./logout.php">Déconnection</a>';
18. }
19. else {
20. echo 'Les variables ne sont pas déclarées.';
21. }

Voyons alors le code de la page permettant au membre de se déconnecter (la page logout.php).
On aura alors :

exemple4.php

	1. <?php
	2. // On démarre la session
	3. session_start ();
	
	4. // On détruit les variables de notre session
	5. session_unset ();
	
	6. // On détruit notre session
	7. session_destroy ();
	
	8. // On redirige le visiteur vers la page d'accueil
	9. header ('location: index.htm');
	10. ?>

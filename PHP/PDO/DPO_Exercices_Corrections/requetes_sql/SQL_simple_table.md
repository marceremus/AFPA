
# CRUD en PHP
## Un CRUD signifie
### Create = INSERT
### Read   = SELECT
### Update = UPDATE
### Delete = DELETE


### Base de donnée traitée => jeux_video


### Read   = SELECT
$req = "SELECT * FROM jeux_video";

$req = "SELECT * FROM jeux_video WHERE possesseur = 'Florent'";

$req = "SELECT * FROM jeux_video WHERE possesseur = 'Florent' AND prix > 10";

$req = "SELECT * FROM jeux_video WHERE commentaires LIKE '%jeu%'";

$req = "SELECT nom, prix FROM jeux_video WHERE commentaires LIKE '%jeu%'";

$req = "SELECT nom, prix*1.2 as prixTTC FROM jeux_video WHERE commentaires LIKE '%jeu%'";

$req = "SELECT nom, prix*1.2 as prixTTC FROM jeux_video WHERE commentaires LIKE '%jeu%' AND id=2";

$req = "SELECT nom, prix as prixHT, prix*0.2 as TVA, prix*1.2 as prixTTC FROM jeux_video WHERE commentaires LIKE '%jeu%' AND id=2";

$req = "SELECT DISTINCT(possesseur) FROM jeux_video";

$req = "SELECT COUNT(possesseur) FROM jeux_video";

$req = "SELECT COUNT(possesseur) FROM jeux_video WHERE possesseur = 'Florent'";

$req = "SELECT nom, SUM(prix) as sommePrix FROM jeux_video WHERE possesseur = 'Florent' GROUP BY nom";

$req = "SELECT * FROM jeux_video WHERE possesseur = 'Florent' AND prix BETWEEN 10 AND 20";

$req = "SELECT * FROM jeux_video WHERE possesseur = 'Florent' AND prix BETWEEN 10 AND 20 AND console = 'Megadrive'";

### Update = UPDATE

$query = "UPDATE jeux_video SET prix = 20 WHERE id = 28";

$query = "UPDATE jeux_video SET prix = 20, possesseur='Marc', nbre_joueurs_max = 3 WHERE id = 28";

$query = "UPDATE jeux_video SET prix = prix*1.2 WHERE id = 19";

$query = "UPDATE jeux_video SET commentaires = 'Superbe' WHERE commentaires LIKE 'o_O'";

### Create = INSERT

$insert = "INSERT INTO jeux_video (nom, possesseur, console, prix, nbre_joueurs_max, commentaires) VALUES ('Alive','Pierre','PC', 12, 6, 'Alive jeu video')";

$insert = "INSERT INTO jeux_video (nom, possesseur, console, prix, nbre_joueurs_max, commentaires) VALUES ('Alain','Robert','Box', 82, 10, 'Alive jeu video')";

$insert = "INSERT INTO jeux_video (nom, possesseur, console, commentaires) VALUES ('Alain','Robert','Box', 'Commentaire ajouté')";


### Delete = DELETE

$supp = "DELETE FROM jeux_video WHERE id = 14 ";

$supp = "DELETE FROM jeux_video WHERE id = 18 ";



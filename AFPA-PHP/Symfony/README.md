# AFPA-SYMFONY

## Installation

- liens : https://symfony.com/doc/current/setup.html#creating-symfony-applications
- installations : 
	- version light : composer create-project symfony/skeleton my_project_name
	- version full : composer create-project symfony/website-skeleton my_project_name
	
### Changement des droits des fichiers 
- pour un fichier donné : sudo chmod a+rwx .env
- pour le dossier : sudo chmod -R 777 tondossier  ou sudo chmod a+rwx tondossier .  expl : sudo chmod -R 777 ./FosBundleTest/

### Lancement du projet
	cd my-project/
 	symfony server:start


### Configuration de la Database

- liens : https://symfony.com/doc/current/doctrine.html#configuring-the-database
	
- customize this line!
DATABASE_URL="mysql://db_user:db_password@127.0.0.1:3306/db_name"

- to use sqlite:
- DATABASE_URL="sqlite:///%kernel.project_dir%/var/app.db"

### Création de la DB
php bin/console doctrine:database:create

### Gestion de la DB
- liens : https://www.doctrine-project.org/projects/doctrine-orm/en/2.6/reference/association-mapping.html#association-mapping

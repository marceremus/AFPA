# Tomcat

## Installation du serveur Tomcat

	- liens :
		- https://tomcat.apache.org/download-90.cgi
		
	- installation
			
			1) Téléchargez le fichier correspondant à votre système
			2) Décompressez le
			3) En fonction de votre système d'exploitation
				- Windows : ajoutez le dossier Tomcat... dans le path
				- iOs : ajoutez le dossier dans les Library 

## Modification des droits sur les fichiers sh
	- sudo chmod 7555
		uniquement pour les fichiers de type sh
	- sudo chmod +x *.sh 

## Demarrer le server Tomcat : 
	./startup.sh

## Arret du server Tomcat : 
	./shutdown.sh

## Lancement du serveur sur le navigateur : 
	- http://localhost:8080
	- le port 8080 - port par defaut pour le server Tomcat
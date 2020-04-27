## Gestion des fichiers

La création du dossier
- mkdir('createDir');

La suppression du dossier
- rmdir('createDir');


La création du fichier vide
- touch("createFile.php");


La verification si le fichier existe
- file_exists('test.txt');


La rédaction dans le fichier 
- file_put_contents('test.txt', date('c').PHP_EOL, FILE_APPEND);

Lecture du contenue d'un fichier
- file_get_contents('test.txt');




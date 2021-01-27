## Mot de passe - protection
#### Un hash
- C'est en fait un algorithme qui va, à partir d'une donnée de départ, proposer une empreinte irréversible. Une fois une donnée hashée, il est impossible de la "décrypter", et c'est là la plus grande différence avec un cryptage.
En PHP les deux plus utilisés sont :
	• SHA1() propose un hash en 160 bits (40 caractères)
	• MD5() propose un hash en 128 bits (32 caractères)
	• SHA512() produit un hash de 512 bits


Exemple : 
- $long = strlen($password);
$password = "&=@+" . $long . $password . "#1%";
$password = hash('sha512', $password);
`

#### ATTENTION : 
Maitrisez le contenu de toutes vos variables. N’autorisez que ce qui est nécessaire. Mieux-vaut trop de restrictions que pas assez ! N'oubliez pas le premier commandement de la sécurité informatique : ne faites jamais confiance ! Limitez tout.
	• La longueur de la chaine avec strlen()
	• Utilisez htmlspecialchars() pour éviter les injections
	• N’autorisez que les caractères dont vous avez besoin. Par exemple pour une variable qui contiendra un âge, n’autorisez que les chiffres compris entre 0 et 120
	• Virez les caractères spéciaux si vous n'en avez pas besoin
	• N'autorisez les majuscules que si nécessaire. Vous pouvez les gérer avec une expression régulière ou les fonctions strtolower() et strtoupper()
	• Ne faites pas confiance aux listes déroulantes, checklist, checkbox et autres input prédéfinis en HTML. Ça se modifie coté client
	• …
	
## En bref, soyez de vrais paranos. 



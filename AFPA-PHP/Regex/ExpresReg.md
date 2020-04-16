# Les expressions régulières
Début et fin de chaîne
Les regex permettent d'être très très précis, vous allez bientôt vous en rendre compte.
Jusqu'ici en effet le mot pouvait se trouver n'importe où. Mais supposons que l'on veuille que la phrase commence ou se termine par ce mot.

Nous allons avoir besoin des deux symboles suivants, retenez-les :

^(accent circonflexe) : indique le début d'une chaîne ;

$(dollar) : indique la fin d'une chaîne.

Vous avez le droit d'écrire :[a-z] ! Vous voulez vous arrêter à la lettre « e », pas de problème :[a-e].
Ca fonctionne aussi avec les chiffres :[0-9]. Si vous voulez plutôt un chiffre entre 1 et 8, tapez :[1-8].

Vous pouvez écrire deux plages à la fois dans une classe :[a-z0-9]. Cela signifie « N'importe quelle lettre (minuscule) OU un chiffre ».

Bien entendu, vous pouvez aussi autoriser les majuscules sans passer par les options comme on l'a fait tout à l'heure. Ça donnerait :[a-zA-Z0-9]. C'est donc une façon plus courte d'écrire :

[abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789].

## Les symboles les plus courants
Vous devez retenir trois symboles :

?(point d'interrogation) : ce symbole indique que la lettre est facultative. Elle peut y être 0 ou 1 fois.

Ainsi,#a?#reconnaît 0 ou 1 « a » ;

+(signe plus) : la lettre est obligatoire. Elle peut apparaître 1 ou plusieurs fois.

Ainsi,#a+#reconnaît « a », « aa », « aaa », « aaaa », etc. ;

*(étoile) : la lettre est facultative. Elle peut apparaître 0, 1 ou plusieurs fois.

Ainsi,#a*#reconnaît « a », « aa », « aaa », « aaaa », etc. Mais s'il n'y a pas de « a », ça fonctionne aussi !

## Plus de précisions grâce aux accolades
Parfois on aimerait indiquer que la lettre peut être répétée quatre fois, ou de quatre à six fois… bref, on aimerait être plus précis sur le nombre de répétitions.
C'est là qu'entrent en jeu les accolades.

#### Il y a trois façons d'utiliser les accolades.

{3} : si on met juste un nombre, cela veut dire que la lettre (ou le groupe de lettres s'il est entre parenthèses) doit être répétée 3 fois exactement.
 - '#a{3}#fonctionne donc pour la chaîne « aaa ».

{3,5} : ici, on a plusieurs possibilités. On peut avoir la lettre de 3 à 5 fois.
- '#a{3,5}#fonctionne pour « aaa », « aaaa », « aaaaa ».

{3,} : si vous mettez une virgule, mais pas de 2e nombre, ça veut dire qu'il peut y en avoir jusqu'à l'infini. Ici, cela signifie « 3 fois ou plus ».
- '#a{3,}#fonctionne pour « aaa », « aaaa », « aaaaa », « aaaaaa », etc.


## voir +
- https://ihateregex.io/cheatsheet
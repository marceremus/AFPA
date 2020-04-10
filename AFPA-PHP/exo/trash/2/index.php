<?php
// concatenation
$nom = 'Cédric';
$prenom = "éléments";
$br = '<br>';
/*
echo $nom.$prenom;
echo $br;
echo $nom." ".$prenom;
echo $br;

// toupper
echo strtoupper($nom)." ".strtoupper($prenom);
echo $br;

// mb upercase
echo mb_strtoupper($nom)." ".mb_strtoupper($prenom);
echo $br;
*/

// operations
$a = 10;
$b = 22;
/*
// addition
$resultatAdd = $a + $b;
echo $resultatAdd;
echo $br;

// sustraction
$resultatSust = $a - $b;
echo $resultatSust;
echo $br;

// multiplication
$resultatMultip = $a * $b;
echo $resultatMultip;
echo $br;

// division
$resultatDivision = $a / $b;
echo $resultatDivision;
echo $br;
*/

/*
// if / else
$existe = false;

if(!$existe){  // true
    echo "Le nom a bien été saisi";
}else{
    echo "Le nom n'a pas été trouvé";
}
*/
echo $br;

// fonction et vérification

// addition


//echo $a + $b;


function add($x, $y){

    if(is_string($x) || is_string($y)){
        return "L'opération impossible";
    }elseif (is_array($x) || is_array($y)){
        return "L'opération impossible";
    }elseif(intval($x) || intval($y)){
        return $x + $y;
    }else{
        return $x + $y;
    }

}

echo "Le résultat de l'opération est : ".add(1, 11);
echo $br;





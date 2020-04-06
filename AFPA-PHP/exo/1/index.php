<?php

// valiables
$nom = 'Toto';
$prenom = "Titi";
$age = 23;
$dixAns = 10;
$ageDans10ans = 0;
$ageDans10ans = ($age + $dixAns); // 23 + 10 = 33
$b = '<br>';
// Constantes

define('TVA20', 20);
define('TVA10', 10);
define('TVA55', 5.5);

/*
 * 1) Faire un tableau simple avec les noms de marque de voiture
 * les afficher en utilisant echo
 *  (5 produits)
 */

/*
 * Créer un tableau associatif :
 * marque de téléphone : noms téléphone
 * 3 lignes
 * puis les afficher
 */

$tabVeh = array('BMW','Mercedes','Fiat','Renault','Peugeot');

foreach ($tabVeh as $veh){
    echo $veh.$b;
}

$tableau = array("Marque" => "Iphone",
    "Marque1" => "Nokia",
    "Marque2" => "Samsung"
);

foreach($tableau as $marque => $value){
    echo $marque." => ".$value.$b;
}

// Tableau

$tab1 = [];
$tab2 = array();

// dim simple
$tab1 = array('toto', "tata", "23", 19);
$tab2 = [11, "a", 19, "B" ];
$marqueVoiture = array("BMW", "Audi");

// tableau associatif
$tabVehicule = array(
    "X1" =>  "BMW",       // js => 'nom' : 'Toto'
    "X2" => "Mercedes"
);

$tab3 = array(
    array("A", "B"),
    array(1, 2)
);

foreach ($tab3 as $key=>$value){
    foreach ($value as $k=>$v){
        //  echo $k." ".$v;
        //  echo $b;
    }
}

foreach ($tabVehicule as $key => $value){
   // echo $key." ".$value.'<br>';
}

foreach ($marqueVoiture as $indice => $nomMarque){
    //echo $nomMarque.'<br>';
}

// 1ere
for($i = 0; $i < count($tab1); $i++){
    // echo $tab1[$i].'<br>';
}

// 2 eme
foreach ($tab1 as $h => $g){
    //echo "La clef : ".$h." et sa valeur : ".$g.'<br>';
}

// 3 eme

foreach ($tab1 as $value){
    //echo "La valeur : ".$value.'<br>';
}

/*var_dump($tab1);
echo $b;
var_dump($tab2);*/

/*echo TVA20;
echo $b;
echo TVA10;
echo $b;
echo TVA55;*/

// echo
// var_dump() // servir uniquement pour les développeurs
//var_dump($nom);
//var_dump($ageDans10ans);
//printf("J'ai %d ans", $age);
//printf("Je m'appelle  %s ", $prenom);

/*
$bool = true; // 1
$bool0 = false; // 0
*/

/*
echo $tata;
echo $b;
echo $toto;
echo $b;
echo $age;
echo $b;
*/

// je m'appelle Toto Titi et j'ai 23 ans
//echo "<p>Je m'appelle ".$prenom." ".$nom." et j'ai ".$age." ans</p>";
//echo "<p>Age dans 10 ans ".($age + $dixAns)."</p>";
//echo "<p>Age dans 10 ans ".$ageDans10ans."</p>";


?>

<!--<p>Je m'appelle <?php echo $prenom; ?> <?php echo $nom; ?> et j'ai <?php echo $age; ?> ans</p>

<p>Je m'appelle <?= $prenom; ?> <?= $nom; ?> et j'ai <?= $age; ?> ans</p>-->

<?php

/*
 * Créer un nouveau projet php ("exempleSite")
 * vous créez une page "index.php" puis une page "mesVehicules.php"
 * Sur la page index.php vous créer un lien vers la page "mesVehicules.php"
 * dans la page "mesVehicules.php" vous créez un tableau associatif suivant:
 *  marque => modèle (8)
 *
 * vous afficher dans le fichier et dans un tableau HTML les valeurs du tableau
 *
 */

?>

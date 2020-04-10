<?php
session_start();
//var_dump($_SESSION);
echo '<br>';
if(isset($_SESSION['login'])){
    $identif = $_SESSION['login'];
}else{
    $identif = "";
}

if(isset($_SESSION['pwd'])){
    $mdp = $_SESSION['pwd'];
}else{
    $mdp = "";
}

session_destroy();

echo 'Login : '.$identif;
echo '<br>';
echo 'Mot de passe : '.$mdp;
echo '<br>';
echo "Aujourd'hui nous sommes: " . date("Y/m/d") . "<br>";
//var_dump(date("2020-11-03"));
echo '<br>';
echo date_format(date_create("2020-11-03"), "d-m-Y");
echo '<br>';

$temps = 365*24*3600;
//setcookie($_COOKIE['pseudo'], time() - 3600);


if (isset($_COOKIE['login'])) {
    echo 'Bonjour '.$_COOKIE['login'].' !';
}
else {
    echo 'Notre cookie n\'est pas déclaré.';
}
?>
<p>
    <a href="index.php">Retour</a>
</p>


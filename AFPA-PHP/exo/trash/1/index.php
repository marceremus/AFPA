<?php
session_start();

$_SESSION['login'] = "marceremus";
$_SESSION['pwd'] = "marc123456";
$b = '<br>';
$login = $_SESSION['login'];



if (isset($_SESSION['login']) && isset($_SESSION['pwd'])) {
    echo 'Le login est : '.$_SESSION['login']." et le mot de passe : ".$_SESSION["pwd"];
}
echo $b;
// var_dump($_SERVER);
echo $b;
// var_dump($_SERVER["HTTP_HOST"]);
echo $b;
// var_dump($_SERVER["HTTP_ACCEPT_LANGUAGE"]);
echo $b;

$temps = 2*3600;
// on envoie un cookie de nom pseudo portant la valeur LA GLOBULE

setcookie ("login", $login, time() + $temps);
?>
<p>
    <a href="recupSession.php">Page recup session</a>
</p>


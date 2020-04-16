<?php

if(isset($_COOKIE['login'])){
    setcookie("login", "", time() - 3600*24*365);
}
header('Location: index.php');
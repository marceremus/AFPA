<?php
session_start();
if(isset($_COOKIE['login'])){
    setcookie("login", "", time() - 3600);
}
header('Location: index.php');
<?php

// constantes
define("DB_SERVER_NAME", "localhost");
define("DB_NAME", "velo");
define("DB_USER_NAME",'root');
define("DB_PASS",'root');
define('URI', $_SERVER["REQUEST_URI"]);
define("HOST", $_SERVER["HTTP_HOST"]);

// uri
$dirRepository = dirname($_SERVER['PHP_SELF']);
$absolutURL = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 'https://'  : 'http://';



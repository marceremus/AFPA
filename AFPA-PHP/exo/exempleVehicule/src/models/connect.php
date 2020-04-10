<?php

function connection(){
    try
    {
        $db = new PDO('mysql:host='.LOCALHOST.':8889;dbname='.DBNAME.'; charset=utf8', DBID, DBMDP);
        return $db;
    }
    catch(Exception $e)
    {
        die('Erreur à la BD : '.$e->getMessage());
    }
}
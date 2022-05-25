<?php




/* 
$ le front controller charge:
    l'autoload
    le router
*/
require_once("../vendor/autoload.php");
require_once("../core/functions.php");
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// var_dump("session_status::",session_status());
require_once("../routes/route.web.php");

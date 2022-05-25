<?php

function die_dump($var): void
{
    echo '<pre>';
    var_dump($var);
    echo "  ....." . $_SERVER["PHP_SELF"] . '<br>';
    echo '</pre>';
    die();
}

function debug_errors()
{
    ini_set("display_errors", 1);
    ini_set("display_startup_errors", 1);
    error_reporting(E_ALL);
}
debug_errors();
function getPath()
{
    static $path = null;
    if ($path === null) {
        $path = dirname(__FILE__);
    }
    return $path;
}

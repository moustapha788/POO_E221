<?php 
namespace App\Core;


class Constantes{
    public const WEB_ROOT = "http://localhost:8002/";
    private static array $freeRoute=[];
    public static function ROOT(){
        return str_replace("public", "", $_SERVER["DOCUMENT_ROOT"]);
    }

    /**
     * Get the value of freeRoute
     */ 
    public static function getFreeRoute()
    {
        return self::$freeRoute;
    }

    /**
     * Set the value of freeRoute
     *
     * @return  self
     */ 
    public static function setFreeRoute($freeRoute):void
    {
        self::$freeRoute[]=$freeRoute;
    }

    
}


Constantes::setFreeRoute("SecuriteController/home");
Constantes::setFreeRoute("SecuriteController/login");
// Constantes::setFreeRoute("*");

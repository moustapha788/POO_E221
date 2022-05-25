<?php

namespace App\Core;

use App\Model\User;

class Session
{
    private static User $user;
    public function __construct()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }
    /* 
    NOTA BENE: add a value in the session 
        like
            the futuries(use case)
            the routes()
    */
    public function set(string $key, mixed $data)
    {
        $_SESSION[$key] = $data;
    }
    /* 
    NOTA BENE: get a value in the session 
    */
    public function get(string $key)
    {
        return $_SESSION[$key];
    }
    /* 
    NOTA BENE: get the user who is the session (user who  is connected)
    */
    public function getUser(): User
    {
        return $this->user;
    }

    public function setUser($user): self
    {
        $this->user = $user;

        return $this;
    }
    public static function is_connect():bool
    {
        return isset($_SESSION["USER_CONNECT"]);
    }
    public static function is_RP():bool
    {
        return $_SESSION["USER_CONNECT"]->role==="ROLE_RP";
    }
    public static function is_AC():bool
    {
        return $_SESSION["USER_CONNECT"]->role==="ROLE_AC";
    }
    public static function is_Etudiant():bool
    {
        return $_SESSION["USER_CONNECT"]->role==="ROLE_ETUDIANT";
    }
}

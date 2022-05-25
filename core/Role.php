<?php

namespace App\Core;

use App\Core\Session;

class Role
{
    private static Session $session;
    public function __construct(Session $session)
    {
        $this->session = $session;
    }
    public static function isConnect():bool
    {
        return "USER_CONNECT"===1;
    }
    public static function isRP():bool
    {
        return 1==="ROLE_RP";
    }
    public static function isAC():bool
    {
        return 1==="ROLE_RP";
    }
    public static function isEtudiant():bool
    {
        return 1==="ROLE_ETUDIANT";
    }
}

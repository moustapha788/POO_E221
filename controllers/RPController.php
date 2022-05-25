<?php

namespace App\Controller;

use App\Core\Controller;
use App\Model\RP;

class RPController extends Controller
{
    public function listerRP()
    {
        /* from database */
        $rps =  RP::findAll();

        /*  */
        $dataNavInfos = [
            "text" => "Responsables Pédagogiques",
            "color" => "gradient",
            "textSize" => 2,
            "textBtn" => "Ajouter",
            "btnColor" => "mine",
            "link" => "#"
        ];
        $enTete = ["#", "Nom Complet", "Login", "Role"];
        $btns = [
            "warning" => ["#", "Modifier"],
            "danger" => ["#", "Supprimer"],
            "primary" => ["#", "Details"]
        ];
        $columns = ["numero", "nom_complet", "login", "role"];
        $this->render("rp/liste", [
            "title" => "liste des Responsables Pédagogiques",
            "rps" => $rps,
            "btns" => $btns,
            "enTete" => $enTete,
            "columns" => $columns,
            "dataNavInfos" => $dataNavInfos
        ]);
    }
}

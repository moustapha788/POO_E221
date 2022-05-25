<?php

namespace App\Controller;

use App\Core\Controller;
use App\Model\AC;

class ACController extends Controller
{
    public function listerAC()
    {
        /* from database */
        $attaches =  AC::findAll();

        /*  */
        $dataNavInfos = [
            "text" => "Liste des Attachées",
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
        $this->render("ac/liste", [
            "title" => "liste des Attachées",
            "acs" => $attaches,
            "btns" => $btns,
            "enTete" => $enTete,
            "columns" => $columns,
            "dataNavInfos" => $dataNavInfos
        ]);
    }
}

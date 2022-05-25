<?php

namespace App\Controller;

use App\Model\Etudiant;
use App\Core\Controller;

class EtudiantController extends Controller
{
    public function listerEtudiants()
    {
        /* from database */
        $etudiants = Etudiant::findAll();
        /*  */
        $dataNavInfos = [
            "text" => "Liste des Étudiants",
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
        $this->render("etudiant/liste", [
            "title" => "liste des Étudiants",
            "etudiants" => $etudiants,
            "btns" => $btns,
            "enTete" => $enTete,
            "columns" => $columns,
            "dataNavInfos" => $dataNavInfos
        ]);
    }
}

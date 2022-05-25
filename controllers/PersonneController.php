<?php

namespace App\Controller;

use App\Core\Controller;
use App\Model\Personne;

class PersonneController extends Controller
{
    public function listerPersonnes()
    {
        /* from database */
        $persons = Personne::findAll();

        /*  */
        $dataNavInfos = [
            "text" => "Liste de toutes les personnes",
            "color" => "gradient",
            "textSize" => 2,
            "textBtn" => "Ajouter",
            "btnColor" => "mine",
            "link" => "#"
        ];
        $enTete = ["#", "Nom Complet", "Login", "Grade", "Matricule", "Sexe", "Addresse", "Role"];
        $btns = [
            "warning" => ["personnes/edit/", "Modifier"],
            "danger" => ["personnes/delete/", "Supprimer"],
            "primary" => ["personnes/details/", "Details"]
        ];
        $columns = ["numero", "nom_complet", "login", "grade", "matricule", "sexe", "adresse", "role"];
        $this->render("personne/liste", [
            "title" => "liste de toutes les personnes",
            "persons" => $persons,
            "btns" => $btns,
            "enTete" => $enTete,
            "columns" => $columns,
            "dataNavInfos" => $dataNavInfos
        ]);
    }
}

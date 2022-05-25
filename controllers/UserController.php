<?php

namespace App\Controller;

use App\Model\User;
use App\Core\Controller;

class UserController extends Controller
{

    public function listerUsers()
        /* from database */
    {
        $user =  User::findAll();


        /*  */
        $dataNavInfos = [
            "text" => "Liste de tous les utilisateurs",
            "color" => "gradient",
            "textSize" => 2,
            "textBtn" => "Ajouter",
            "btnColor" => "mine",
            "link" => "#"
        ];
        $enTete = ["#", "Nom Complet", "Login", "Grade", "Matricule", "Sexe", "Addresse", "Role"];
        $btns = [
            "warning" => ["#", "Modifier"],
            "danger" => ["#", "Supprimer"],
            "primary" => ["#", "Details"]
        ];
        $columns = ["numero", "nom_complet", "login","grade", "matricule", "sexe", "adresse", "role"];
        $this->render("user/liste", [
            "title" => "liste de tous les utilisateurs",
            "user" => $user,
            "btns" => $btns,
            "enTete" => $enTete,
            "columns" => $columns,
            "dataNavInfos" => $dataNavInfos
        ]);
       
    }
}

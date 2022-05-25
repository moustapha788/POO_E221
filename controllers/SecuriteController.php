<?php

namespace App\Controller;

use App\Core\Controller;
// use App\Core\Role;
// use App\Core\
use App\Model\User;
use App\Core\Session;

class SecuriteController extends Controller
{

    public function home()
    {
        if ($this->request->isGet()) {
            $this->render("securite/home");
        } else {
        }
    }
    public function login()
    {

        if ($this->request->isGet()) { // Affichage du formulaire de connexion avant soumission => GET
            if (Session::is_connect()) {
                $this->redirectToRoute("home");
            }
            $this->render("securite/login");
        } else { // Traitement du formulaire de connexion après soumission => POST
            extract($_POST);
            $user = User::findUserByLoginAndPassword($login, $password);
            if ($user) {
                $_SESSION["USER_CONNECT"] = $user;

                $this->redirectToRoute("home");
            } else {
                $this->redirectToRoute("login");
            }
        }
    }
    public function logout()
    {
        if ($this->request->isGet()) {
            session_destroy();
            session_unset();
            $this->redirectToRoute("login");
        }
    }
}

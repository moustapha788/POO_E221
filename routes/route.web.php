<?php
/* 
Nota Bene:le router et les classes d'erreur 
*/

use App\Core\Router;
use App\Exception\RouteNotFoundException;

/* 
Nota Bene:les controllers
*/

use App\Controller\SecuriteController;
use App\Controller\PersonneController;
use App\Controller\UserController;
use App\Controller\ProfesseurController;
use App\Controller\ACController;
use App\Controller\RPController;
use App\Controller\EtudiantController;
use App\Controller\ClasseController;

/* 
Nota Bene:le front controller  chargera le router
*/

$router = new Router();

/* 
Nota Bene: Définition des routes => Ajout des routes dans le tableau routes 
*/
$router->addRoute("/", [SecuriteController::class, "home"]);
$router->addRoute("/home", [SecuriteController::class, "home"]);
$router->addRoute("/login", [SecuriteController::class, "login"]);
$router->addRoute("/logout", [SecuriteController::class, "logout"]);
$router->addRoute("/classes", [ClasseController::class, "listerClasses"]);
$router->addRoute("/add-classe", [ClasseController::class, "creerClasse"]);
// nota bene: routes ..... lister
$router->addRoute("/lister-professeurs", [ProfesseurController::class, "listerProfesseurs"]);
$router->addRoute("/lister-ACs", [ACController::class, "listerAC"]);
$router->addRoute("/lister-RPs", [RPController::class, "listerRP"]);
$router->addRoute("/lister-etudiants", [EtudiantController::class, "listerEtudiants"]);
$router->addRoute("/lister-users", [UserController::class, "listerUsers"]);
$router->addRoute("/lister-personnes", [PersonneController::class, "listerPersonnes"]);
/*
 Nota Bene: Résolution des routes => Rechercher si la route se trouve dans le tableau routes
 */
try {
    // Essaie de résoudre la route
    $router->resolve();
} catch (RouteNotFoundException $ex) {
    // capture l'exeption et affiche le
    echo $ex->message;
}

<?php

namespace App\Core;

use App\Exception\RouteNotFoundException;
use App\Core\Request;
use App\Core\Constantes;
use App\Core\Session;


class Router
{
    private Request $request;
    private array $routes = [];

    public function __construct()
    {
        $this->request = new Request();
    }

    public function addRoute(string $uri, array $action)
    {
        $this->routes[$uri] = $action;
    }

    public function resolve()
    {
        $uri = "/" . $this->request->getUri()[0];

        if (isset($this->routes[$uri])) {
            // opération de destuction avec php8 (affecter les valeurs d'un tableau dans des variables)
            [$ctrClass, $method] = $this->routes[$uri];
            if (class_exists($ctrClass) && method_exists($ctrClass, $method)) {
                // action
                $freeRoutes = Constantes::getFreeRoute();

                $ctrl = new $ctrClass($this->request);

                $freeTest = explode('\\', $ctrl::class)[2] . "/" . $method;

                if (in_array("*", $freeRoutes) || in_array($freeTest, $freeRoutes)) {
                    call_user_func(array($ctrl, $method));
                } elseif (Session::is_connect()) {
                    call_user_func(array($ctrl, $method));
                } else {

                    header("Location: " . "/login");
                }
            } else {
                echo "Vous êtes trompé sur le nom de la classe  ou le nom de la méthode";
                throw new RouteNotFoundException();
            }
        } else {
            throw new RouteNotFoundException();
        }
    }
}

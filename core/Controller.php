<?php

namespace App\Core;

use App\Core\Request;
use App\Core\Constantes;
use App\Core\Session;
use App\Core\HtmlProvider;


class Controller
{
    protected Request $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function render(string $path/* nom_dossier/nom_fichier */, array $data = [])
    {
       

        $data['Constantes'] = Constantes::class;
        $data['Session'] = Session::class;
        $data['request'] = $this->request;
        $data['HtmlProvider'] = HtmlProvider::class;

        ob_start();/* le buffeur commence à aspirer le html */
        extract($data);
        require_once(Constantes::ROOT() . "templates/" . $path . ".html.php");
        $content_for_views = ob_get_clean();/* fin de aspirement du html */

        require_once(Constantes::ROOT() . "templates/layout/base.html.php");/* $content_for_views est passé à cette vue principale */
    }
    public function redirectToRoute(string $uri)
    {
        header("Location: " . Constantes::WEB_ROOT . $uri);
    }
}

<?php




namespace Controllers;

class Home extends AbstractController
{
//
    protected $defaultModelName = \Models\Home::class;






    public function index(){


        //Le render prend 2 paramètre nom dossier / templates et un tableau contenant le titre de la page
        // "pageTitle", et des index - valeur pour chaque variable
        return $this->render("home/index", ["pageTitle" => "Home Page"]);
    }
}





?>
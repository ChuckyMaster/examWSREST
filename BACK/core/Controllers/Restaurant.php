<?php

namespace Controllers;

class Restaurant extends AbstractController
{

protected $defaultModelName = \Models\Restaurant::class;





    public function index(){

        $this->json($this->defaultModel->findAll());
}

    public function new(){


        $request = $this->post("json", [
            "name" => "text",
            "adress" => "text",
            "city" => "text"
        ]);


        if($request){
            $restaurant = new \Models\Restaurant();
            $restaurant->setName($request["name"]);
            $restaurant->setAdress($request["adress"]);
            $restaurant->setCity($request["city"]);


            $this->defaultModel->save($restaurant);

            return $this->json("Restaurant ajouté");
        }

        return $this->json("mauvaise requête");

    }


    public function suppr(){

        //reccuperer la requete

        $request = $this->delete('json', ['id' => 'number']);

        if (!$request){
            return $this->json("Requête mal soumise", "delete");
        }

        //verifier que le restaurant existe
        //s'il n'existe pas , renvoyer une réponse qui le signal

        $restaurant = $this->defaultModel->findById($request['id']);

        if(!$restaurant){
            return $this->json("Ce restaurant n'existe pas", "delete");
        }

        //supprimer le restaurant

        $this->defaultModel->remove($restaurant);

        return $this->json("message supprimé", "delete");

    }


}
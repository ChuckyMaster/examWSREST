<?php

namespace App;

class Response 
{

    /**
     *
     * renvoie du contenu serialisé en JSON en tant que réponse
     *
     * @param $responseToClient
     * @return void
     */
    public static function json($responseToClient, ?string$methodeSpe = null){

        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Headers: *');
        if($methodeSpe == "delete"){
            header('Access-Control-Allow-Methods: DELETE');
        }
        if($methodeSpe == "put"){
            header('Access-Control-Methods: PUT');
        }
        echo json_encode($responseToClient);
    }


    /**
 * 
 * redirige vers l'url passée en parametre
 * 
 * @param string $url
 * 
 * @return void
 */

 public static function redirect(?array $parameters=null):void{


    $url = "index.php";
        if($parameters){

            $url = "?";

                    foreach($parameters as $key => $value){

                        $newParamGet = $key."=".$value."&";

                        $url.=$newParamGet;
                    }
        }


    header("Location: ".$url);
    exit();
}




}




?>
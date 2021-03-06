<?php

namespace App;

class Request
{
    /**
     * @param string $dataType
     * @param array $requestBodyParams
     * @return array|false
     */
    public static function get(string $dataType, array $requestBodyParams)
    {
        if($_SERVERS['REQUEST_METHOD'] != 'GET') {
            return false;
        }
        return Request::isSubmitted( $dataType, $requestBodyParams, 'get');
    }

    /**
     * @param string $dataType
     * @param array $requestBodyParams
     * @return array|false
     */
    public static function post(string $dataType, array $requestBodyParams){

        if($_SERVER['REQUEST_METHOD'] != 'POST') {
            return false;
        }

        return Request::isSubmitted( $dataType, $requestBodyParams);
    }

    /**
     * @param string $dataType
     * @param $requestBodyParams
     * @return false|void
     */
    public static function delete(string $dataType, $requestBodyParams) {

        if($_SERVER['REQUEST_METHOD'] != 'DELETE') {
            return false;
        }

        return Request::isSubmitted($dataType, $requestBodyParams);
    }

    public static function put(string $dataType, array $requestBodyParams){

        if($_SERVER['REQUEST_METHOD'] != 'put' ){
            return false;
        }

        return Request::isSubmitted($dataType, $requestBodyParams);
    }


    /**
     * verifie si tout les params de la requete sont bons, text ou nombres entiers
     * si tout est valide, renvoie un tableau avec ces paramètres
     * sinon renvoie un booleen faux
     *
     * @param string $dataType
     * @param array $requestBodyParams
     * @return false | array
     */
    public static function isSubmitted(string $dataType, array $requestBodyParams)
    {
        if($dataType == "json"){
            $bodyRequest = file_get_contents( 'php://input');
            $requestParams = json_decode($bodyRequest, true);
        }

        if($dataType == "form"){

            $requestParams = $_POST;
        }

        $results = false;

        forEach($requestBodyParams as $param=>$datasType) {

            if(!empty($requestParams[$param]))
            {
                if($datasType == 'text'){
                    $results[$param] = htmlspecialchars($requestParams[$param]);

                } else if($datasType == 'number'){
                    if(ctype_digit($requestParams[$param])){
                        $myNumber = htmlspecialchars($requestParams[$param]);
                        $results[$param] = (int)$myNumber;
                    } else { return false;}
                }
            } else {return false;}

        }

            return $results;

    }


}
<?php

namespace Controllers;

abstract class AbstractController {

    protected $defaultModel;

    protected $defaultModelName;

        public function __construct()
        {
                           
            $this->defaultModel = new $this->defaultModelName();
        }



        public function redirect( ? array $url=null):Response
        {
            return \App\Response::redirect($url);
        }


        public function render(string $template, array $datas){
            
            return \App\View::render($template, $datas);
        }

        public function json($responseToClient, ?string $methodeSpe = null){
            return \App\Response::json($responseToClient, $methodeSpe);
        }

        public function getUser()
        {

            return \Models\User::getUser();
        }

        public function get(string $dataType, array $requestBodyParams){
            return \App\Request::get($dataType, $requestBodyParams);
        }

        public function post(string $dataType, array $requestBodyParams){
            return \App\Request::post($dataType,$requestBodyParams);
        }
        public function delete(string $dataType, array $requestBodyParams){
            return \App\Request::delete($dataType,$requestBodyParams);



        }
        public function put(string $dataType, array $requestBodyParams){
            return \App\Request::put($dataType,$requestBodyParams);
        }
}


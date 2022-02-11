<?php

spl_autoload_register(
    function($nameClass){
        
        $nameClass = str_replace("\\", "/", $nameClass);

        require_once "core/{$nameClass}.php";
    }
)




?>
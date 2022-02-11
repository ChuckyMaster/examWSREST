<?php

namespace Database;

class PdoMySQL
{

    public static $pdo = null;

/**
 * Retourne un objet pour intéragir avec la base de données
 * 
 * @return \PDO
 * 
 */

public static function getPdo():\PDO {

    if(is_null(self::$pdo)) {
        self::$pdo = new \PDO("mysql:host=localhost;dbname=lesrestos;charset=utf8", "jean","jean", [
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_OBJ ]);
    }

    return self::$pdo;

}

}









?>
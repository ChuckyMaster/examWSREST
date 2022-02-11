<?php



namespace Models;

//creation d'une classe qui hérite de AbstractModel pour herité des fonctionnalités:
// findAll(), findById(), remove()
class Home extends AbstractModel{



// ici, le nom de la table en question de la BDD
    protected string $tableName = "table name";

    // Pour chaque colonne de la table, il nous faut un getter et setter, pour l'id seulement le getter.
    //cela permettra d'y acceder via les methodes
}










?>
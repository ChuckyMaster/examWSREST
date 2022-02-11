<?php
namespace App;


class View
{

    /**
  * genere le rendu d'une page à partir d'un template
  *et des donnés fournies
  *@param string $templateName
  *@param array $datas
  *@return 
  *
  */


  public static function render(string $templateName, array $datas){


    ob_start();

    extract($datas);

    require_once "templates/{$templateName}.html.php";

    $pageContent = ob_get_clean();

        ob_start();
    require_once "templates/layout.html.php";

    echo ob_get_clean();

  }
}






?>
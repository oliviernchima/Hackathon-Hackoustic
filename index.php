<?php



// call header.php
include "views/partials/header.php";


if( isset ($_GET["page"])  && !empty($_GET["page"]) ){
    // $view=$_GET['page'].".php";
  switch($_GET["page"]){
    case "son":
      $view = "views/pages/son.php";
      break;
      case 'mesure':
       $view = "views/pages/mesure.php";
       break;
       case 'map':
        $view = "views/pages/map.php";
        break;
     case 'lieux':
        $view = "views/pages/lieux.php";
        break;
               case 'sensibilisation':
        $view = "views/pages/sensibilisation.php";
        break;
    default:
      $view = "views/pages/mesure.php";  // home page
} 
}

include "views/partials/footer.php";

?>

<?php

$url = $_SERVER['PHP_SELF'];

//////////////////////////////////////////// HOMETOP ////////////////////////////////////////////
if (!defined('Connexion')){define("Connexion", "Connexion");}
if (!defined('Renseignements')){define("Renseignements", "Informations");}
if (!defined('Farfadets')){define("Farfadets", "Farfadets");}
if (!defined('Louveteaux')){define("Louveteaux", "Cubs");}
if (!defined('Jeanettes')){define("Jeanettes", "Jeanettes");}
if (!defined('Scouts')){define("Scouts", "Scouts");}
if (!defined('Pionniers')){define("Pionniers", "Pioneers");}
if (!defined('Caravelles')){define("Caravelles", "Caravels");}
if (!defined('Compagnons')){define("Compagnons", "Compagnons");}
if (!defined('Chefs')){define("Chefs", "Leadders");}
if (!defined('Chefs')){define("Chefs", "Chefs");}
if (!defined('Description')){define("Description", "à faire");}

//////////////////////////////////////////// POST ////////////////////////////////////////////
if($url=='/GitHub/G6B/Site/controleur/Post.php'){
if (!defined('Select')){define("Select", "Veuillez sélectionner un ".$_GET['sujet']." pour décourvir les posts qui y sont associés");}
if (!defined('Répondre')){define("Répondre", "Répondre");}
if (!defined('Réponse')){define("Réponse", "Votre Réponse :");}
if (!defined('Poster')){define("Poster", "Poster");}
}
//////////////////////////////////////////// CONTACT ////////////////////////////////////////////


?>

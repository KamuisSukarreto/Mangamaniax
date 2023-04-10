<?php
include('vues/nav.php');
include('../index.html/vues/entete.html');
require_once("modeles/BD.inc.php");
require_once("modeles/fonctions.php");
require_once("modeles/fonction_foranime.php");
require_once("modeles/fonction_forFA.php");
require_once("modeles/fonction_formanga.php");
require_once("modeles/recherche.php");





if(!isset($_REQUEST['uc']))
     $uc = 'voirManga'; // si $_GET['uc'] n'existe pas , $uc reçoit une valeur par défaut
 else
 	$uc = $_REQUEST['uc'];


switch($uc) 
{
	
    case 'voirManga':

    {
        include("controleur/c_page.php");
        break;
	}

	case 'voirAnime':

	{
		include("controleur/c_anime.php");
		break;
	}

	
	case 'voirFA':

	{
		include("controleur/c_fa.php");
		break;
	}	
		
	case 'Voirmanga':

	{
		include("controleur/c_manga.php");
		break;
	}



}
?>

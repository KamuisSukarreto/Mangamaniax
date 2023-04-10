<?php
if(isset($_REQUEST['action'])){
$action=$_REQUEST['action'];
}
else{
    $action = 'voirLesAnimes';
}

switch($action){

case 'voirLAnime':
    {
        if(isset($_REQUEST['idPage'])){
        $idManga = $_REQUEST['idPage'];
        }
        else{
            header('Location:index.php');
        }

        $leManga = leMangaEnQuestion($idManga);
        include('vues/v2-actu1.php');


        break;
    }


case 'voirLesAnimes':
        {
            $lesanimes = getTousLesAnimes();    
            include('vues/V2.php');
            
            break;
        }


case 'recherche':
        {
            $import = $_POST['search'];
            $recherche = getTouteLesRecherche($import);
            include ('vues/V2.php');
            break;
        }
}



?>
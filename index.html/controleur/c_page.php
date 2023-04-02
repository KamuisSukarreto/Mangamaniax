<?php
if(isset($_REQUEST['action'])){
$action=$_REQUEST['action'];
}
else{
    $action = 'voirActu';
}

switch($action){

case 'voirLeManga':
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
    case 'voirleActu':
        {
            if(isset($_REQUEST['idPage'])){
                $idMangas = $_REQUEST['idPage'];
                }
                else{
                    header('Location:index.php');
                }
            $actu = lactuEnQuestion($idMangas);
            
            include('vues/v2-actu1.php');
            break;
        }

case 'voirActu':
    {
        
        $leManga = getTousLesMangas();
        $lesActus = getTousLesactus();
        include('vues/V2.php');
        break;
    }


}



?>
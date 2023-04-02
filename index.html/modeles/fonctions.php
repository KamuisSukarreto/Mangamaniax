<?php






function getTousLesMangas(/*$rapnum*/){

    try{

    $getInfo = connexionPDO();
   $req = $getInfo->prepare('SELECT id, titre, contenu, date_de_publi, Ytb, Article_img, genre, lettre, Img_acc FROM articles'); //WHERE RAP_NUM  = :rapnum 
//    $req->bindParam(':rapnum', $rapnum, PDO::PARAM_STR);

   $req->execute();
   $result = $req->fetchAll();
       return $result;
   } 

   catch (PDOException $e){
       print "Erreur !: " . $e->getMessage();
       die();
   }

}

function leMangaEnQuestion($id){

    try{

    $getInfo = connexionPDO();
   $req = $getInfo->prepare('SELECT id, titre, contenu, date_de_publi, Ytb, Article_img, genre FROM articles WHERE id=:id'); //WHERE RAP_NUM  = :rapnum 
  $req->bindParam(':id', $id, PDO::PARAM_STR);

   $req->execute();
   $result = $req->fetchAll();
       return $result;
   } 

   catch (PDOException $e){
       print "Erreur !: " . $e->getMessage();
       die();
   }

}
function lactuEnQuestion($id){

    try{

    $getInfo = connexionPDO();
   $req = $getInfo->prepare('SELECT lettre, titre, contenu, date_de_publi, Ytb, Article_img, genre FROM actualite WHERE lettre=:id'); //WHERE RAP_NUM  = :rapnum 
  $req->bindParam(':id', $id, PDO::PARAM_STR);

   $req->execute();
   $result = $req->fetchAll();
       return $result;
   } 

   catch (PDOException $e){
       print "Erreur !: " . $e->getMessage();
       die();
   }
}


function getTousLesactus(/*$rapnum*/){

    try{

    $getInfo = connexionPDO();
   $req = $getInfo->prepare('SELECT lettre, titre, contenu, date_de_publi, Ytb, Article_img, genre,  Img_acc FROM actualite'); //WHERE RAP_NUM  = :rapnum 
//    $req->bindParam(':rapnum', $rapnum, PDO::PARAM_STR);

   $req->execute();
   $result = $req->fetchAll();
       return $result;
   } 

   catch (PDOException $e){
       print "Erreur !: " . $e->getMessage();
       die();
   }

}




?>
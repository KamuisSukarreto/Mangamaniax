<?php
function getTousLesmanga(/*$rapnum*/){

try{

$getInfo = connexionPDO();
$req = $getInfo->prepare('SELECT id, titre, contenu, date_de_publi, Ytb, Article_img, genre, lettre, Img_acc FROM articles WHERE genre="Manga"'); //WHERE RAP_NUM  = :rapnum 
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
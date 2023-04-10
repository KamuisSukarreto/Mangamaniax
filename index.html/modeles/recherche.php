<?php


// if(isset($_POST['search'])) {
//     $recherche = $_POST['search'];

//     try {
//         $getInfo = connexionPDO();
//         $req = $getInfo->prepare('SELECT id, titre, contenu, date_de_publi, Ytb, Article_img, genre, lettre, Img_acc FROM articles WHERE genre="anime" AND (titre LIKE :recherche OR contenu LIKE :recherche)');
//         $req->execute(array(':recherche' => '%'.$recherche.'%'));
//         $result = $req->fetchAll();

//         // Afficher les résultats de la recherche
//         foreach ($result as $row) {
//             echo "<h2>".$row['titre']."</h2>";
//             echo "<p>".$row['contenu']."</p>";
//         }
//     } catch (PDOException $e) {
//         print "Erreur !: " . $e->getMessage();
//         die();
//     }
// }
function getTouteLesRecherche($import){

    try {
         $getInfo = connexionPDO();
         $req = $getInfo->prepare('SELECT id, titre, contenu, date_de_publi, Ytb, Article_img, genre, lettre, Img_acc FROM articles WHERE genre LIKE :recherche OR titre LIKE :recherche OR contenu LIKE :recherche');
         $req->execute(array(':recherche' => '%'.$import.'%'));
         $result = $req->fetchAll();
        
        // Afficher les résultats de la recherche
          return $result;
          
            } catch (PDOException $e) {
                print "Erreur !: " . $e->getMessage();
                die();
            }

}


?>

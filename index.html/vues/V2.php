


	<!-- Header -->
	<header class="bg-light py-5">
		<div class="container2">
			<div class="row">
				<div class="col-md-8 mx-auto text-center">
					<h1 class="display-4">Les dernières actualités</h1>
					<p class="lead mb-0">Restez informé(e) des dernières tendances en matière de séries, films et mangas.</p>
				</div>
			</div>
		</div>
	</header>
	<!-- Contenu -->
	<section class="py-5">
		<div class="container">
			<div class="row">
			
                <div class="container">
                    <h2 class="text-center">L'essentiel des mangas et animés</h2>
                    <div class="row">

                    <?php



if(isset($_REQUEST['uc']) && $_REQUEST['uc']=='voirManga'){


foreach($leManga as $lesInfos){

	$id = $lesInfos['id'];
	$titre = $lesInfos['titre'];
	$contenu=$lesInfos['contenu'];
	$date = $lesInfos['date_de_publi'];
  $Ytb = $lesInfos['Ytb'];
  $Article_img = $lesInfos['Article_img'];
  $genre = $lesInfos['genre'];
  $lettre = $lesInfos['lettre'];
  $Img_acc = $lesInfos['Img_acc'];

  ?>

                      <div class="col-md-2">
                        <a href="index.php?uc=voirManga&action=voirLeManga&idPage=<?php echo $id ?>">
                          <div class="card mb-3">
                            <img src="<?php echo $Img_acc?>" class="card-img-top" alt="...">
                            <div class="card-img-overlay">
                              <h5 class="card-title1"><?php echo $genre ?></h5>
                            </div>
                          </div>
                        </a>
                      </div>

<?php 
}
?>        
                    </div>
                  </div>

                  

                  
                  
                  <div class="container my-5">
                    <h2>Actualité</h2>
                    <hr>
                    <div class="row">

<?php
foreach($lesActus as $lesInfos){

	$lettre = $lesInfos['lettre'];
	$titre = $lesInfos['titre'];
	$contenu=$lesInfos['contenu'];
	$date = $lesInfos['date_de_publi'];
  $Ytb = $lesInfos['Ytb'];
  $Article_img = $lesInfos['Article_img'];
  $genre = $lesInfos['genre'];
  $Img_acc = $lesInfos['Img_acc'];

  ?>


                    
                      <div class="col-lg-6">
                        <div class="card mb-3">
                          <div class="row no-gutters">
                            <div class="col-md-4">
                              <img src="<?php echo $Img_acc?>" class="card-img" alt="...">
                            </div>

                            <div class="col-md-8">

                              <div class="card-body">
                                <h5 class="card-title"><?php echo $titre?></h5>
                                <p class="card-text"><?php echo $contenu?></p>
                                <a href="index.php?uc=voirManga&action=voirleActu&idPage=<?php echo $lettre ?>" class="stretched-link"></a>
                              </div>

                            </div>

                          </div>
                        </div>
                      </div>
<?php
}
}



if(isset($_REQUEST['uc']) && $_REQUEST['uc']=='voirAnime'){




?>



          <div class="col-md-2">
          <a href="index.php?uc=voirManga&action=voirLeManga&idPage=<?php echo $lettre ?>">
            <div class="card mb-3">
              <img src="<?php echo $Img_acc?>" class="card-img-top" alt="...">
              <div class="card-img-overlay">
                <h5 class="card-title1"><?php echo $genre ?></h5>
              </div>
            </div>
          </a>
        </div>


<?php


  }

?>




                      <!-- POUR ACTUALITE
                        </div>
                      <div class="col-lg-6">
                        <div class="card mb-3">
                          <div class="row no-gutters">
                            <div class="col-md-4">
                              <img src="actualite/2.webp" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                              <div class="card-body">
                                <h5 class="card-title">Le manga Trap Hole aux éditions Kana</h5>
                                <p class="card-text">TLes éditions Kana nous annoncent l'arrivée d'un nouveau manga dans leur catalogue : Trap Hole de Yoko Nemu.</p>
                                <a href="index.php?uc=voirManga&action=voirLeManga&idPage=b" class="stretched-link"></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="card mb-3">
                          <div class="row no-gutters">
                            <div class="col-md-4">
                              <img src="actualite/3.webp" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                              <div class="card-body">
                                <h5 class="card-title">(+18) Le manga Slave Widow Mariko aux éditions Hot Manga

                                </h5>
                                <p class="card-text">Les éditions Hot Manga nous annoncent l'arrivée d'un nouveau manga dans leur catalogue : Slave Widow Mariko (Reijou Miboujin Mariko) de Aki Hanasaki (Scénariste) et Hirohisa Onikubo (Dessinateur), qui fait suite au manga Slave Wife Mariko (Hitozuma Reijou Mariko) paru en 2017 en France chez Hot Manga.</p>
                                <a href="index.php?uc=voirManga&action=voirLeManga&idPage=c" class="stretched-link"></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="card mb-3">
                          <div class="row no-gutters">
                            <div class="col-md-4">
                              <img src="actualite/4.webp" class="card-img1" alt="...">
                            </div>
                            <div class="col-md-8">
                              <div class="card-body">
                                <h5 class="card-title">Ocean Rush annoncé aux éditions Akata
                                </h5>
                                <p class="card-text">Les éditions Akata nous annoncent l'arrivée d'un nouveau manga dans leur catalogue : Ocean Rush (Umi ga Hashiru End Roll) de John Tarachine.</p>
                                <a href="index.php?uc=voirManga&action=voirLeManga&idPage=d" class="stretched-link"></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="card mb-3">
                          <div class="row no-gutters">
                            <div class="col-md-4">
                              <img src="actualite/5.webp" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                              <div class="card-body">
                                <h5 class="card-title">Le manga Le Quotidien d'une épée maudite aux éditions Mana Books</h5>
                                <p class="card-text">Les éditions Mana Books nous annoncent l'arrivée d'un nouveau manga dans leur catalogue : Le Quotidien d'une épée maudite (Jyaken-san wa Sugu Bureru) de Nikiichi Tobita.</p>
                                <a href="index.php?uc=voirManga&action=voirLeManga&idPage=e" class="stretched-link"></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="card mb-3">
                          <div class="row no-gutters">
                            <div class="col-md-4">
                              <img src="actualite/6.webp" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                              <div class="card-body">
                                <h5 class="card-title">Une seconde saison pour Mononogatari !
                                </h5>
                                <p class="card-text">Alors que le douzième et dernier épisode de Mononogatari (Spirits Seekers) vient d'être diffusé, nous apprenons par le biais du Twitter officiel de l'anime que celui-ci est reconduit pour une seconde saison dès juillet 2023 !</p>
                                <a href="index.php?uc=voirManga&action=voirLeManga&idPage=f" class="stretched-link"></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="card mb-3">
                          <div class="row no-gutters">
                            <div class="col-md-4">
                              <img src="actualite/7.webp" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                              <div class="card-body">
                                <h5 class="card-title">Une seconde saison pour High Card
                                </h5>
                                <p class="card-text">C'est à l'occasion de l'AnimeJapan 2023, qui s'est déroulé ce week-end au Japon, que l'annonce a été faite : une seconde saison pour l'anime High Card est actuellement en cours de production.</p>
                                <a href="index.php?uc=voirManga&action=voirLeManga&idPage=g" class="stretched-link"></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="card mb-3">
                          <div class="row no-gutters">
                            <div class="col-md-4">
                              <img src="actualite/8.webp" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                              <div class="card-body">
                                <h5 class="card-title">nobi nobi! dévoile les premières pages de Bibliophile Princess
                                </h5>
                                <p class="card-text">Les éditions nobi nobi! viennent de dévoiler les premières pages de leur nouvelle série, Bibliophile Princess (Mushikaburi Hime) de Satsuki Shiina (Chara-designer) et Yui (scénariste) (Scénariste) et Yui Kikuta (Dessinateur).</p>
                                <a href="index.php?uc=voirManga&action=voirLeManga&idPage=h" class="stretched-link"></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="card mb-3">
                          <div class="row no-gutters">
                            <div class="col-md-4">
                              <img src="actualite/9.webp" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                              <div class="card-body">
                                <h5 class="card-title">Une nouvelle vidéo promotionnelle pour l'anime I Got a Cheat Skill in Another World
                                </h5>
                                <p class="card-text">Une nouvelle vidéo promotionnelle pour l'anime Isekai de Cheat Skill wo Te ni Shita Ore wa, Genjitsu Sekai wo mo Musou Suru : Level Up wa Jinsei wo Kaeta (Cheat Skill Level Up) vient d'être dévoilée. Dans ce trailer, on peut y entendre "Hachimitsu", l'ending interprété par Shikao Suga.</p>
                                <a href="index.php?uc=voirManga&action=voirLeManga&idPage=i" class="stretched-link"></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="card mb-3">
                          <div class="row no-gutters">
                            <div class="col-md-4">
                              <img src="actualite/10.webp" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                              <div class="card-body">
                                <h5 class="card-title">Titre de l'actualité 3</h5>
                                <p class="card-text">Texte de l'actualité 3. Morbi iaculis lorem sit amet velit vehicula, eu pharetra purus hendrerit. In ac molestie libero, at molestie felis. Praesent imperdiet dui vel erat commodo, ut vestibulum sapien bibendum. Duis vitae tincidunt mauris.</p>
                                <a href="index.php?uc=voirManga&action=voirLeManga&idPage=j" class="stretched-link"></a>
                              </div>
                            </div>
                          </div>
                        </div> -->
                      </div>
                      
                        
  
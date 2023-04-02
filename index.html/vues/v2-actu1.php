 
<?php
if($_REQUEST['action']=='voirLeManga'){
foreach($leManga as $lesInfos){

	$id = $lesInfos['id'];
	$titre = $lesInfos['titre'];
	$contenu=$lesInfos['contenu'];
	$date = $lesInfos['date_de_publi'];
  $Ytb = $lesInfos['Ytb'];
  $Article_img = $lesInfos['Article_img'];
}
}
if($_REQUEST['action']=='voirleActu'){

  foreach($actu as $lesInfos){

    $lettre = $lesInfos['lettre'];
    $titre = $lesInfos['titre'];
    $contenu = $lesInfos['contenu'];
    $date = $lesInfos['date_de_publi'];
    $Ytb = $lesInfos['Ytb'];
    $Article_img = $lesInfos['Article_img'];
  }
}

?>

  <h1 class="title-page"><?php echo $titre; ?></h1>
  
    <div class="body1 div-align">
     
      <div class="container1 div-align">

        <div class="left">
          <div>
             <img src="<?php echo $Article_img ?>" alt="Image">
          </div>

          <div>
              <p id="contenuManga"><?php echo $contenu ?></p>
          </div>
        </div>

              <iframe src="<?php echo $Ytb ?>"></iframe>
      </div>
    </div>

   



  <!-- <div class="wrapper">
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
                  <a href="#" class="stretched-link"></a>
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
                  <a href="#" class="stretched-link"></a>
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
                  <a href="#" class="stretched-link"></a>
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
                  <a href="#" class="stretched-link"></a>
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
                  <a href="#" class="stretched-link"></a>
                </div>
              </div>
            </div>
          
        </div>
      </div> -->

      


      

  


 
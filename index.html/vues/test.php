<div id="produits">

<?php
// parcours du tableau contenant les produits à afficher
foreach( $lesMangas as $unManga) 
{ 	// récupération des informations du produit
	$id = $unManga['id'];
	$titre = $unManga['titre'];
	$contenu=$unManga['contenu'];
	$date = $unManga['date_de_publi'];

	// affichage d'un produit avec ses informations
	?>	
	<div class="card">
		<div class="descrCard"><?php echo $id ?></div>
			<div class="photoCard"><img src="<?php echo $titre ?>" alt=image /></div>
			<div class="desc_detail"><?php echo $contenu ?></div>

		<div class="info-card">
			<div class="prixCard">A partir de <?php echo $date."€" ?></div>
		
        </div>
         	
			
	</div>
<?php			
} // fin du foreach qui parcourt les produits
?>
</div>
<?php 
if(isset($_SESSION['nomAdmin'])){?>
	<div class=actions>
<div id="button-modif-prod">
<a id="link-modif-prod" href="index.php?uc=administrer&action=modifLesProduits">Modifier les produits</a>
</div>
<div id="button-ajouter-prod">
<a id="link-ajouter-prod" href="index.php?uc=administrer&action=ajouterUnProduit">Ajouter des produits</a>
</div>
</div>
<?php
}
?>
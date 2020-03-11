<?php 
class ProductionAffichage
{
public static function AffichageListeProduction()
{
$productions = ProductionManager::getList();
?>
<div class="ligne">
<div class="bloc titre">Quantite</div>
<div class="bloc titre">OrdreFabrication</div>
<div class="bloc titre">DateHeureDebutProd</div>
<div class="bloc titre">DateHeureFinProd</div>
<div class="bloc titre">IdUtilisateur</div>
</div>
<?php
foreach ($productions as $elt) {
?>
<div class="ligne">
<div class="bloc contenu"><?php echo $elt->getQuantite() ?></div>
<div class="bloc contenu"><?php echo $elt->getOrdreFabrication() ?></div>
<div class="bloc contenu"><?php echo $elt->getDateHeureDebutProd() ?></div>
<div class="bloc contenu"><?php echo $elt->getDateHeureFinProd() ?></div>
<div class="bloc contenu"><?php echo $elt->getIdUtilisateur() ?></div>
</div>
<?php
}
}

public static function AffichageDetailProduction($id)
{
$productions = ProductionManager::findById($id);
?>
<div class="ligne">
<div class="bloc titre">Quantite</div>
<div class="bloc titre">OrdreFabrication</div>
<div class="bloc titre">DateHeureDebutProd</div>
<div class="bloc titre">DateHeureFinProd</div>
<div class="bloc titre">IdUtilisateur</div>
</div>

<div class="ligne">
<div class="bloc contenu"><?php echo "quantite : " . $productions->getQuantite() ?></div>
<div class="bloc contenu"><?php echo "ordreFabrication : " . $productions->getOrdreFabrication() ?></div>
<div class="bloc contenu"><?php echo "dateHeureDebutProd : " . $productions->getDateHeureDebutProd() ?></div>
<div class="bloc contenu"><?php echo "dateHeureFinProd : " . $productions->getDateHeureFinProd() ?></div>
<div class="bloc contenu"><?php echo "idUtilisateur : " . $productions->getIdUtilisateur() ?></div>
</div>
<?php
}
}
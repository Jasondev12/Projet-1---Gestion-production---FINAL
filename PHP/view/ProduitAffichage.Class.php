<?php 
class ProduitAffichage
{
public static function AffichageListeProduit()
{
$produits = ProduitManager::getList();
?>
<div class="ligne">
<div class="bloc titre">NomProduit</div>
<div class="bloc titre">Type</div>
<div class="bloc titre">IdLot</div>
<div class="bloc titre">DateHeure</div>
<div class="bloc titre">Reference</div>
<div class="bloc titre">IdProduction</div>
<div class="bloc titre">IdReference</div>
</div>
<?php
foreach ($produits as $elt) {
?>
<div class="ligne">
<div class="bloc contenu"><?php echo $elt->getNomProduit() ?></div>
<div class="bloc contenu"><?php echo $elt->getType() ?></div>
<div class="bloc contenu"><?php echo $elt->getIdLot() ?></div>
<div class="bloc contenu"><?php echo $elt->getDateHeure() ?></div>
<div class="bloc contenu"><?php echo $elt->getReference() ?></div>
<div class="bloc contenu"><?php echo $elt->getIdProduction() ?></div>
<div class="bloc contenu"><?php echo $elt->getIdReference() ?></div>
</div>
<?php
}
}

public static function AffichageDetailProduit($id)
{
$produits = ProduitManager::findById($id);
?>
<div class="ligne">
<div class="bloc titre">NomProduit</div>
<div class="bloc titre">Type</div>
<div class="bloc titre">IdLot</div>
<div class="bloc titre">DateHeure</div>
<div class="bloc titre">Reference</div>
<div class="bloc titre">IdProduction</div>
<div class="bloc titre">IdReference</div>
</div>

<div class="ligne">
<div class="bloc contenu"><?php echo "nomProduit : " . $produits->getNomProduit() ?></div>
<div class="bloc contenu"><?php echo "type : " . $produits->getType() ?></div>
<div class="bloc contenu"><?php echo "idLot : " . $produits->getIdLot() ?></div>
<div class="bloc contenu"><?php echo "dateHeure : " . $produits->getDateHeure() ?></div>
<div class="bloc contenu"><?php echo "reference : " . $produits->getReference() ?></div>
<div class="bloc contenu"><?php echo "idProduction : " . $produits->getIdProduction() ?></div>
<div class="bloc contenu"><?php echo "idReference : " . $produits->getIdReference() ?></div>
</div>
<?php
}
}
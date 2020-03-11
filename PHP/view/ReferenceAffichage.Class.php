<?php 
class ReferenceAffichage
{
public static function AffichageListeReference()
{
$reference = ReferenceManager::getList();
?>
<div class="ligne">
<div class="bloc titre">NomReference</div>
</div>
<?php
foreach ($reference as $elt) {
?>
<div class="ligne">
<div class="bloc contenu"><?php echo $elt->getNomReference() ?></div>
</div>
<?php
}
}

public static function AffichageDetailReference($id)
{
$reference = ReferenceManager::findById($id);
?>
<div class="ligne">
<div class="bloc titre">NomReference</div>
</div>

<div class="ligne">
<div class="bloc contenu"><?php echo "nomReference : " . $reference->getNomReference() ?></div>
</div>
<?php
}
}
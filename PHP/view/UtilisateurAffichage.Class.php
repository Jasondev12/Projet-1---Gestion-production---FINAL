<?php 
class UtilisateurAffichage
{
public static function AffichageListeUtilisateur()
{
$utilisateurs = UtilisateurManager::getList();
?>
<div class="ligne">
<div class="bloc titre">NomUtilisateur</div>
<div class="bloc titre">PrenomUtilisateur</div>
<div class="bloc titre">PseudoUtilisateur</div>
<div class="bloc titre">Mdp</div>
<div class="bloc titre">Role</div>
</div>
<?php
foreach ($utilisateurs as $elt) {
?>
<div class="ligne">
<div class="bloc contenu"><?php echo $elt->getNomUtilisateur() ?></div>
<div class="bloc contenu"><?php echo $elt->getPrenomUtilisateur() ?></div>
<div class="bloc contenu"><?php echo $elt->getPseudoUtilisateur() ?></div>
<div class="bloc contenu"><?php echo $elt->getMdp() ?></div>
<div class="bloc contenu"><?php echo $elt->getRole() ?></div>
</div>
<?php
}
}

public static function AffichageDetailUtilisateur($id)
{
$utilisateurs = UtilisateurManager::findById($id);
?>
<div class="ligne">
<div class="bloc titre">NomUtilisateur</div>
<div class="bloc titre">PrenomUtilisateur</div>
<div class="bloc titre">PseudoUtilisateur</div>
<div class="bloc titre">Mdp</div>
<div class="bloc titre">Role</div>
</div>

<div class="ligne">
<div class="bloc contenu"><?php echo "nomUtilisateur : " . $utilisateurs->getNomUtilisateur() ?></div>
<div class="bloc contenu"><?php echo "prenomUtilisateur : " . $utilisateurs->getPrenomUtilisateur() ?></div>
<div class="bloc contenu"><?php echo "pseudoUtilisateur : " . $utilisateurs->getPseudoUtilisateur() ?></div>
<div class="bloc contenu"><?php echo "mdp : " . $utilisateurs->getMdp() ?></div>
<div class="bloc contenu"><?php echo "role : " . $utilisateurs->getRole() ?></div>
</div>
<?php
}
}
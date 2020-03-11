<?php
/* Entete tableau*/
$produits = ReferenceManager::getList(); 
$affichage='
<div class="tablehauteur">
<table id="tableFormulaire">
  <h2 class="titreprod">Références des produits</h2>
  <div class="ensembleBouttonAdmin">
    <div id="titreprod" class="titreprod" ><a  href="index.php?action=adminProduitForm&m=ajout"> Ajouter Produit </a></div>
</div>
  <thead>
    <tr>
      <th class="titreTh" id="traitTh">Référence</th>
      <th class="titreTh" id="traitTh">Nom du produit</th>
      <th class="titreTh">Actions</th>
    </tr>
  </thead>';
  foreach ($produits as $elt) {
    $affichage .= '<tbody>
      <tr>
        <td  class="bordertd" data-label="idReference">' . $elt->getIdReference() . '</td>
        <td class="bordertd" data-label="nomReference">' . $elt->getNomReference() . '</td>
        <td class="bordertd" data-label="recapProduction"><a class="boutton" id="submit" type="submit" href="index.php?action=adminProduitForm&m=modif&id='.$elt->getIdReference().'" >Modifier</a>
        <a class="boutton" id="submit" type="submit" href="index.php?action=adminProduitForm&m=suppr&id='.$elt->getIdReference().'" >Supprimer</a></td>
      </tr>
    </tbody>';
}
$affichage.='
</table>
<div class="ensembleBouttonListeAdmin">
<a class="bouttonListe" id="bouttonListe2" type="submit" href="index.php?action=administration" >Retour</a></div>';
echo $affichage;
?>

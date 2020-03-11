<?php
/* Entete tableau*/
$utilisateur = UtilisateurManager::getList(); 

// Création insertion pour html
if($lvl > 1){
$affichage='
<div class="tablehauteur">
<table id="tableFormulaire">
<h2 class="titreprod">Utilisateurs</h2>
<div class="ensembleBouttonAdmin">
<div id="titreprod" class="titreprod" ><a  href="index.php?action=adminUtilisateurForm&m=ajout"> Ajouter un utilisateur </a></div>
</div>
<thead>
    <tr>
      <th class="titreTh" id="traitTh">ID</th>
      <th class="titreTh" id="traitTh">Pseudo</th>
      <th class="titreTh" id="traitTh">Nom</th>
      <th class="titreTh" id="traitTh">Prénom</th>
      <th class="titreTh" id="traitTh">Rôle</th>
      <th class="titreTh">Actions</th>
    </tr>
  </thead>
';

foreach ($utilisateur as $elt) {
    $affichage .= ' <tbody>
    <tr>
    <td  class="bordertd" data-label="idUtilisateur">'. $elt->getIdUtilisateur(). '</td>
    <td  class="bordertd" data-label="pseudoUtilisateur">'. $elt->getPseudoUtilisateur(). '</td>
    <td  class="bordertd" data-label="nomUtilisateur">'.  $elt->getNomUtilisateur() . '</td>
    <td  class="bordertd" data-label="prenomUtilisateur">'. $elt->getPrenomUtilisateur() . '</td>
    <td  class="bordertd" data-label="role">'. $elt->getRole() . '</td>
    <td class="bordertd" data-label="recapProduction"><a class="boutton" id="submit" type="submit" href="index.php?action=adminUtilisateurForm&m=modif&id='.$elt->getIdUtilisateur().'" >Modifier</a>
        <a class="boutton" id="submit" type="submit" href="index.php?action=adminUtilisateurForm&m=suppr&id='.$elt->getIdUtilisateur().'" >Supprimer</a></td>
        </tr>
    </tbody>';
}

$affichage.='
</table>
<div class="ensembleBouttonListeAdmin">
<a class="bouttonListe" id="bouttonListe2" type="submit" href="index.php?action=administration" >Retour</a></div>';
echo $affichage;
}
?>




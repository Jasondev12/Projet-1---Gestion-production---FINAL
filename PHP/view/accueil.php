<?php
$prenomUtilisateur = (isset($_SESSION['prenomUtilisateur'])) ? $_SESSION['prenomUtilisateur'] : '';
echo "<h1 class='titreAccueil'>Bienvenue " . $prenomUtilisateur . "</h1>";
$affichage = '
<div class="tablehauteur">
<table id="tableFormulaire">
  <caption class="titreprod">Liste des productions</caption>
  <thead>
    <tr>
      <th class="titreTh" id="traitTh">ID</th>
      <th class="titreTh" id="traitTh">Date / Heure</th>
      <th class="titreTh" id="traitTh">Produit</th>
      <th class="titreTh" id="traitTh">Quantité</th>
      <th class="titreTh">Action</th>
    </tr>
  </thead>';
$listeProductions = ProductionManager::getShortList();
foreach ($listeProductions as $listeProd) {
    $affichage .= '<tbody>
      <tr>
        <td  class="bordertd" data-label="idProduction">' . $listeProd->getIdProduction() . '</td>
        <td class="bordertd" data-label="dateTime">' . date('d/m/Y', strtotime($listeProd->getDateHeureDebutProd())) . '</td>
        <td class="bordertd" data-label="nomProduit">' . ReferenceManager::findById($listeProd->getIdReference())->getNomReference() . '</td>
        <td class="bordertd" data-label="quantite">' . $listeProd->getQuantite() . '</td>
        <td class="bordertd" data-label="recapProduction"><a class="boutton" id="submit" type="submit" href="index.php?action=productionRecap&id='.$listeProd->getIdProduction().'" >Recapitulatif</a></td>
      </tr>
    </tbody>';
}
?>
<?php
$affichage.='
</table>
<div class="ensembleBouttonListe">
<a class="bouttonListe" id="bouttonListe2" type="submit" href="index.php?action=productionForm" >Nouvelle production</a></div></div>';
echo $affichage;

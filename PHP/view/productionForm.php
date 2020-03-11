
<?php

$_SESSION['pseudo'] = "Operateur";
 
echo '<h2 class="titreN2">Nouvelle production</h2>
<div class="contenuNouvelleProd">
<form action="index.php?action=productionAction" method="POST">

    <p class="marginProd"><span class="produitProd">Produit par:</span><span> '.$_SESSION['pseudo'].'</span></p>
    <p class="marginProd">
        <label for="idReference">Référence : </label>
        <select name="idReference" id="idReference">';
        
        $references = ReferenceManager::getList();

        foreach($references as $reference){
            echo '<option value="'.$reference->getIdReference().'">'.$reference->getIdReference()." : " .$reference->getNomReference().'</option>';
        }
        
        echo '</select>
    </p>

    <p class="marginProd"><label for="quantite">Quantité : </label><input type="number" min="1" name="quantite" id="quantite"></p>
    <p class="marginProd"><label for="ordrefabrication">Ordre de Fabrication :  </label><input type="text" name="ordrefabrication" id="ordrefabrication"></p>

    <p><a class="bouttonListeProd" href="index.php">Retour</a><button type=submit>Démarrer Production</button></p>
    

</form></div>';

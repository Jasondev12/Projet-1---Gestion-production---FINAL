<?php

   if(!isset($_POST["idReference"]) || $_POST["idReference"] == "" || !isset($_POST["quantite"]) || $_POST["quantite"] == "" || !isset($_POST["ordrefabrication"]) || $_POST["ordrefabrication"] == ""){
        echo "<p>Les champs doivent être remplis!</p>";
    }else{
        $production = new Production($_POST);
        $production->setDateHeureDebutProd(date_format(new DateTime(), "Y-m-d H:i:s"));
        $production->setIdUtilisateur(UtilisateurManager::get($_SESSION['pseudoUtilisateur'])->getIdUtilisateur());

        ProductionManager::add($production);

        header("Location: index.php?action=production&id=".ProductionManager::getLastId());
    }
?>

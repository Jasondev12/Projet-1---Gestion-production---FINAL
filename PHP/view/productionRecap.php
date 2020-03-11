<?php
$prod = ProductionManager::findById($_GET['id']);
?>
<div id="production">
    <section id="productionInfo">

        <h2 class="titreRecapProd">Récapitulatif de production</h2>
        
        <p class="textRecapProd"><span class="underlineRecapProd"> Production lancée par :</span> <?php echo UtilisateurManager::findById($prod->getIdUtilisateur())->getPseudoUtilisateur(); ?></p>
        <p class="textRecapProd"><span class="underlineRecapProd"> Production de :</span> <?php echo $prod->getQuantite() ?> Pièces de <?php echo $prod->getIdReference() . " : " . ReferenceManager::findById($prod->getIdReference())->getNomReference() ?></p>
        <p class="textRecapProd"><span class="underlineRecapProd"> Ordre de fabrication :</span> <?php echo $prod->getOrdreFabrication() ?></p>

        <p class="textRecapProd"><span class="underlineRecapProd"> Date/Heure Début :</span> <?php echo date('d/m/Y H:i:s', strtotime($prod->getDateHeureDebutProd())) ?></p>
        <p class="textRecapProd"><span class="underlineRecapProd"> Date/Heure Fin :</span> <?php echo date('d/m/Y H:i:s', strtotime($prod->getDateHeureFinProd())) ?></p>
        <p class="textRecapProd"><span class="underlineRecapProd"> Durée :</span> 
            <?php
            //Calcul de la durée depuis le temps de lancement de la production
            $now = new DateTime();
            $dateFin = DateTime::createFromFormat('Y-m-d H:i:s', $prod->getDateHeureFinProd());
            $dateDebut = DateTime::createFromFormat('Y-m-d H:i:s', $prod->getDateHeureDebutProd());
            $interval = $dateDebut->diff($dateFin);
            echo $interval->format('%H hours %i minutes %s seconds');
            ?> </p>

        <?php

        $count = ProduitManager::countByIdProd($prod->getIdProduction()); //Nombre de produits créés dans cete production

        echo '<p class="textRecapProd"><span class="underlineRecapProd"> Pièces produites :</span> <span id=#prodCount>'. $count .' / '. $prod->getQuantite().' Pièces</span></p>';

        if ($count < $prod->getQuantite()) {
            echo '<div class="info erreur">
                        <p>La quantité prévue n\'a pas été atteinte, souhaitez-vous reprendre la production?</p>
                        <a class="button" href="index.php?action=production&id=' . $_GET['id'] . '">Reprendre production</a>
                    </div>';
        }



        ?>
    </section>

    <?php


    $produits = ProduitManager::getListByIdProd($prod->getIdProduction()); //Liste des produits de cette production
    $produits = array_reverse($produits); //Inversion de la liste

    ?>

    <section id="productionScanListe">

        <div id="listProd">
            <div class="ligne">
                <div class="bloc">Date</div>
                <div class="bloc">Heure</div>
                <div class="bloc">Lot ID</div>
            </div>

            <?php

            //Affichage d'une ligne par produit
            $i = 0;
            foreach ($produits as $p) {

                echo '<div class="ligne ';



                echo '">
                    <div class="bloc">' . date('d/m/Y', strtotime($p->getDateHeure())) . '</div>
                    <div class="bloc">' . date('H:i:s', strtotime($p->getDateHeure())) . "." . $p->getMillisecondes() . '</div>
                    <div class="bloc">' . $p->getIdLot() . '</div>
                    </div>';
                $i++;
            }
            ?>

        </div>

        <div class="buttons"><a class="button" onclick="window.print()" href="#">Imprimer</a><a class="button" href="index.php">Retour à l'Accueil</a><div>

    </section>

</div>
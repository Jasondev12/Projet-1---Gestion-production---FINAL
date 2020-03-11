<?php

$prod = ProductionManager::findById($_GET['id']);

$new = 0; //Nombre de nouvelles lignes

header("refresh:1;url=index.php?action=production&id=" . $_GET['id']);

//je recupere le fichier texte
$file = @fopen("test.txt", "r");

//Pour chaque ligne du fichier
while (($line = fgets($file, 4096)) !== false) {

    //Décomposition de la ligne
    $lineSplit = explode(";", $line);

    $dt = $lineSplit[0];
    $idLot = $lineSplit[1];

    $milli = explode(".", $dt)[1];
    $dtProduit = ProduitManager::findByDateTime($dt); //Cherche le produit dans la bdd en fonction de son dateTime

    //Si la ligne n'existe pas (le dateTime n'est pas déjà présent dans la bdd)
    if ($dtProduit == false) {

        //Création d'un objet produit à partir de la ligne
        $produit = [];
        $produit["dateHeure"] = $dt;
        $produit["millisecondes"] = $milli;
        $produit["idProduction"] = $prod->getIdProduction();
        $produit["idReference"] = $prod->getIdReference();

        $produit["idLot"] = explode(";", $line)[1];

        ProduitManager::add(new Produit($produit)); //On ajoute le produit
        $new++; //Une ligne en plus
    }
}

@fclose($file);

?>

<div id="production">

    <section id="productionInfo">
        <p>Production lancée par : <?php echo UtilisateurManager::findById($prod->getIdUtilisateur())->getPseudoUtilisateur(); ?></p>
        <p>Production de : <?php echo $prod->getQuantite() ?> Pièces de <?php echo $prod->getIdReference() . " : " . ReferenceManager::findById($prod->getIdReference())->getNomReference() ?></p>
        <p>Ordre de fabrication : <?php echo $prod->getOrdreFabrication() ?></p>

        <p>Date/Heure Début : <?php echo $prod->getDateHeureDebutProd() ?></p>
        <p>Durée :
            <?php
            //Calcul de la durée depuis le temps de lancement de la production
            $now = new DateTime();
            $now->setTimestamp(time());
            $dateHeureProd = DateTime::createFromFormat('Y-m-d H:i:s', $prod->getDateHeureDebutProd());
            $interval = $dateHeureProd->diff($now);
            echo $interval->format('%H hours %i minutes %s seconds');
            ?> </p>

        <?php

        $count = ProduitManager::countByIdProd($prod->getIdProduction()); //Nombre de produits créés dans cete production

        if ($count == $prod->getQuantite()) {
            echo '<div class="info success">
                        <p>La quantité prévue à été atteinte.</p>
                    </div>';
        }else if ($count > $prod->getQuantite()){
            echo '<div class="info warning">
            <p>Vous avez dépassé la quantité prévue.</p>
            </div>';
        }

        echo '<a class="button" href="index.php?action=productionFin&id=' . $_GET['id'] . '">Fin de production</a>';

        ?>
    </section>

    <?php

    $produits = ProduitManager::getListByIdProd($prod->getIdProduction()); //Liste des produits de cette production
    $produits = array_reverse($produits); //Inversion de la liste

    ?>

    <section id="productionScanListe">

        <p>Production en cours : <span id=#prodCount><?php echo " " . $count . "/" . $prod->getQuantite() ?> Pièces</span></p>

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

                //Ajouter la classe new aux nouvelles lignes pour changer leur style
                if ($i < $new) {
                    echo "new";
                }

                echo '">
                    <div class="bloc">' . date('d/M/Y', strtotime($p->getDateHeure())) . '</div>
                    <div class="bloc">' . date('H:i:s', strtotime($p->getDateHeure())) . "." . $p->getMillisecondes() . '</div>
                    <div class="bloc">' . $p->getIdLot() . '</div>
                    </div>';
                $i++;
            }
            ?>

        </div>
    </section>

</div>
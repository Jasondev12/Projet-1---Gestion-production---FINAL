<?php

if($lvl < 2){
    header("Location: index.php");
}

$mode = $_GET["m"];
if ($mode != "ajout")
{
    $id = $_GET["id"];
    $Reference = ReferenceManager::findById($id);
    if($mode == "suppr"){
        header("Location: index.php?action=adminProduitAction&m=suppr&id=".$Reference->getIdReference());
    }
}
echo '
<h1 class="titreModifProduit">Modification d\'un produit</h1>
<div class="formulaire">
        <form action="index.php?action=adminProduitAction&m=' . $mode . '" method = "POST">
            <div class="marginProd"> 
                <label for="idReference">Reference : </label>
                <input type="text" id="idReference" name="idReference" placeholder="Reference du produit"  required autofocus  ';
                    if ($mode != "ajout")
                    {
                        echo 'value ="' . $Reference->getIdReference() . '"'; /* Demander s'il s'agit de l'id reference ou du nom */
                    }
echo '          >
            </div>';
if ($mode != "ajout")
{
    echo '  <input type="text" id="idReference" name="idReference" hidden value = "' . $Reference->getIdReference() . '">';
}
echo '      <div class="marginProd">  
                <lalbel for="nomReference"> Nom : </label>
                <input type="text" id="nomReference" name="nomReference" placeholder="Nom du produit" required ';
                    if ($mode != "ajout")
                    {
                        echo 'value ="' . $Reference->getNomReference() . '"';
                    }

echo '          >
            </div> ';
echo '      <div class="centrer">
                <button class="bouton" id="submit" type="submit ">';
                    switch ($mode)
                    {
                        case "ajout":echo 'Ajouter';
                            break;
                        case "modif":echo 'Modifier';
                            break;
                        case "suppr":echo 'Supprimer';
                            break;
                    }
echo '          </button>
            </div>
        </form>
    </div>';
<?php

if($lvl < 2){
    header("Location: index.php");
}

$mode = $_GET["m"];
$p = new Reference($_POST);

switch ($mode)
{
    case "ajout":
        if ($lvl>1)
        ReferenceManager::add($p);
        break;
    case "modif":
        if ($lvl>1)
        ReferenceManager::update($p);
        break;
    case "suppr":
        if ($lvl>1)
        {
            $p->setIdReference($_GET["id"]);
            ReferenceManager::delete($p);
        }
        break;
}
header("location:index.php?action=adminProduitListe");


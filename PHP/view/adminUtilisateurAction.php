<?php

if($lvl < 2){
    header("Location: index.php");
}

$mode = $_GET["m"];
$p = new Utilisateur($_POST);
$p->setMdp(md5($p->getMdp())) ; /* Permet de crypter le mot de passe */
/* Les options ajouter, modifier, supprimer ne sont accessible que par l'administrateur dont le niveau est égal à 2 */
switch ($mode)
{
    case "ajout":
        if ($lvl>1)
        UtilisateurManager::add($p);
        break;
    case "modif":
        if ($lvl>1)
        UtilisateurManager::update($p);
        break;
    case "suppr":
        if ($lvl>1)
        {
            $p->setIdUtilisateur($_GET["id"]);
            UtilisateurManager::delete($p);
        }
        break;
}
header("location:index.php?action=adminUtilisateurListe");
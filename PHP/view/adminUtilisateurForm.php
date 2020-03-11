<?php

if($lvl < 2){
    header("Location: index.php");
}

$mode = $_GET["m"];
if ($mode != "ajout")
{
    $id = $_GET["id"];
    $Utilisateur = UtilisateurManager::findById($id);
    if($mode == "suppr"){
        header("Location: index.php?action=adminUtilisateurAction&m=suppr&id=".$Utilisateur->getIdUtilisateur());
    }
}
/* Pseudo*/
echo '
<h1 class="titreModifUtilisateur">Modification d\'un utilisateur</h1>
<div class="formulaire">
        <form action="index.php?action=adminUtilisateurAction&m=' . $mode . '" method = "POST">
            <div class="marginModif"> 
                <label for="pseudoUtilisateur">Pseudo : </label>
                <input type="text" id="pseudoUtilisateur" name="pseudoUtilisateur" placeholder="pseudoUtilisateur "  required autofocus  ';
                    if ($mode != "ajout")
                    {
                        echo 'value ="' . $Utilisateur->getPseudoUtilisateur() . '"'; 
                    }
echo '          >
            </div>';
if ($mode != "ajout")
{
    echo '  <input type="text" id="idUtilisateur" name="idUtilisateur" hidden value = "' . $Utilisateur->getIdUtilisateur() . '">';
}

/*Nom */
echo '      <div class="marginModif">  
                <lalbel for="nomUtilisateur"> Nom : </label>
                <input type="text" id="nomUtilisateur" name="nomUtilisateur" placeholder="nomUtilisateur" required ';
                    if ($mode != "ajout")
                    {
                        echo 'value ="' . $Utilisateur->getNomUtilisateur() . '"';
                    }
echo '  > </div> ';

/*Prenom */
echo '      <div class="marginModif">  
                <lalbel for="prenomUtilisateur"> Prenom : </label>
                <input type="text" id="prenomUtilisateur" name="prenomUtilisateur" placeholder="prenomUtilisateur" required ';
                    if ($mode != "ajout")
                    {
                        echo 'value ="' . $Utilisateur->getPrenomUtilisateur() . '"';
                    }
echo '  > </div> ';

if ($mode == "ajout") {
/*Mot de passe */
echo '      <div class="marginModif">  
                <lalbel for="mdp"> Mot de passe  : </label>
                <input type="password" id="mdp" name="mdp" placeholder="mdp" required ';
echo '  > </div> ';

/* Confirmation mot de passe */
echo '      <div class="marginModif">  
                <lalbel for="confirm"> Confirmer le mot de passe :  : </label>
                <input type="password" id="confirm" name="confirm" placeholder="confirm" required ';
echo '  > </div> ';
}

/* Role */
/* Création d'une liste déroulante des roles, ceux-ci sont stockés dans un tableau */
echo '       
            <div class="marginModif"> 
                <label for="role">Role : </label>
                <select id="role" name="role" required> ';
                $listeRoles=['Opérateur' => '1' ,'Administrateur' => '2'];

                foreach($listeRoles as $key => $value){
    
                    if($mode != "ajout" && $value == $Utilisateur ->getRole()){
                        $selected="selected";
                    }else{
                        $selected="";
                    }
    
                    echo '<option '.$selected.' value="'.$value.'">'.$key.'</option>';
    
                }
                    
echo '          </select>
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
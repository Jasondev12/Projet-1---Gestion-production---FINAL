<?php

if(isset($_SESSION["pseudoUtilisateur"])){
    header("location:index.php?action=accueil");
}
?>
<h1 class="titreConnexion">Connexion</h1>
<div class="modal-dialog">
            <form action="index.php?action=connexionAction" role="form" method="post">
                <label for="pseudoUtilisateur">Entrez votre nom : </label>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-user"></span>
                        </span>
                        <input name="pseudoUtilisateur" id="pseudoUtilisateur" type="text" class="form-control" placeholder="Nom" />
                    </div>
                </div>
                <label for="mdp">Entrez votre mot de passe : </label>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-lock"></span>
                        </span>
                        <input name="mdp" id="password" type="password" class="form-control" placeholder="Mot de passe" />
                    </div>
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-success btn-lg">Se connecter</button>
                </div>
            </form>
        </div>

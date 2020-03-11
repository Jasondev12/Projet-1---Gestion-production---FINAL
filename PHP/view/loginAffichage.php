<h1 class="titreConnexion">Connexion</h1>
<div class="modal-dialog">
            <form action="index.php?action=connect" role="form" method="post">
                <label for="pseudoUtilisateur">Entrez votre nom : </label>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-user"></span>
                        </span>
                        <input name="pseudoUtilisateur" id="pseudoUtilisateur" type="text" class="form-control" placeholder="Nom" />
                    </div>
                </div>
                <label for="password">Entrez votre mot de passe : </label>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-lock"></span>
                        </span>
                        <input name="password" id="password" type="password" class="form-control" placeholder="Mot de passe" />
                    </div>
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-success btn-lg">Se connecter</button>
                </div>
            </form>
        </div>


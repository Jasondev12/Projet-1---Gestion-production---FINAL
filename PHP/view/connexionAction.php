<?php

if (! isset ( $_POST ['pseudoUtilisateur'] )) // On est dans la page de formulaire
{ 
	require 'PHP/view/connexion.php'; // On affiche le formulaire
} else { // Le formulaire a été validé
	$message = '';
	if (empty ( $_POST ['pseudoUtilisateur'] ) || empty ( $_POST ['mdp'] )) // Oublie d'un champ
	{
		$message = '
		<div class="textConnexion">
		<p class="loginForm">une erreur s\'est produite pendant votre identification.
	                   Vous devez remplir tous les champs</p>
	                   <p class="loginForm">Cliquez <a href="index.php?action=connect">ici</a> pour revenir</p>';
	} else // On check le mot de passe
	{

		$utilisateur = UtilisateurManager::get ( $_POST ['pseudoUtilisateur'] ); // On recherche dans la base l'utilisateur et on rempli l'objet user
		if ($utilisateur->getMdp () == md5 ( $_POST ['mdp'] )) // Acces OK !
		{
			$_SESSION ['pseudoUtilisateur'] = $utilisateur->getPseudoUtilisateur ();
            $_SESSION ['prenomUtilisateur'] = $utilisateur->getPrenomUtilisateur ();
			$_SESSION ['level'] = $utilisateur->getRole ();
			$_SESSION ['id'] = $utilisateur->getIdUtilisateur ();
			$message = '<p class="loginForm">Bienvenue ' . $utilisateur->getPseudoUtilisateur () . ', vous êtes maintenant connecté!</p>' ?>
			<p class="loginForm">Cliquez <a href="index.php?action=deconnexion">ici</a> pour déconnecter</p>
			<?php header("refresh:2,url=index.php?action=accueil")?>
		<?php } else // Acces pas OK !
		{
			$message = '<p class="loginForm">Une erreur s\'est produite pendant votre identification.<br /> Le mot de passe ou le pseudo
			entré n\'est pas correcte.</p></div>';
			header("refresh:3,url=index.php");
		}
	}
	echo $message ;
}

?>

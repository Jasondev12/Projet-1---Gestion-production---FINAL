<?php


if (! isset ( $_POST ['pseudoUtilisateur'] )) // On est dans la page de formulaire
{ 
	require 'PHP/view/loginAffichage.php'; // On affiche le formulaire
} else { // Le formulaire a été validé
	$message = '';
	if (empty ( $_POST ['pseudoUtilisateur'] ) || empty ( $_POST ['mdp'] )) // Oublie d'un champ
	{
		$message = '<p>une erreur s\'est produite pendant votre identification.
	                   Vous devez remplir tous les champs</p>
	                   <p>Cliquez <a href="index.php?action=connect">ici</a> pour revenir</p>';
	} else // On check le mot de passe
	{
		$utilisateur = UserManager::get ( $_POST ['pseudoUtilisateur'] ); // On recherche dans la base l'utilisateur et on rempli l'objet user
		
		if ($utilisateur->getMdp () == md5 ( $_POST ['mdp'] )) // Acces OK !
		{
			$_SESSION ['pseudoUtilisateur'] = $utilisateur->getpseudoUtilisateur ();
			$_SESSION ['level'] = $utilisateur->getRole ();
			$_SESSION ['id'] = $utilisateur->getIdUser ();
			$message = '<p>Bienvenue ' . $utilisateur->getpseudoUtilisateur () . ', vous êtes maintenant connecté!</p>' ?>
			<p>Cliquez <a href="index.php?action=deconnect">ici</a> pour déconnecter</p>
			<?php header("refresh:6,url=index.php?action=ClientListe")?>
		<?php } else // Acces pas OK !
		{
			$message = '<p>Une erreur s\'est produite pendant votre identification.<br /> Le mot de passe ou le pseudo
			entré n\'est pas correcte.</p>';
			header("refresh:3,url=index.php?action=connect");
		}
	}
	echo $message ;
}

?>

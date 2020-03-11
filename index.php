<?php
function ChargerClasse($classe)
{
<<<<<<< HEAD
	if (file_exists("PHP/controller/" . $classe . ".Class.php")) {
		require "PHP/controller/" . $classe . ".Class.php";
	}
	if (file_exists("PHP/model/" . $classe . ".Class.php")) {
		require "PHP/model/" . $classe . ".Class.php";
	}
}
require 'PHP/model/DbConnect.Class.php';
spl_autoload_register("ChargerClasse");
//Fonction d'affichage de la page
function AfficherPage($page)
{
	$chemin = $page[0];
	$nom = $page[1];
	$titre = $page[2];
    include 'php/view/Head.php';
    include 'php/view/header.php';
    include $chemin . $nom . '.php';
    include 'php/view/Footer.php';
}
DbConnect::init();
session_start();
$routes = [
	"default" => ["php/view/","connexion","Connexion"],
	"connexion" => ["php/view/","connexion","Connexion"],
	"connexionAction" => ["php/view/","connexionAction","Connexion"],
	"deconnexion" => ["php/view/","deconnexionAction",""],
	"accueil" => ["php/view/","accueil","Accueil"],
	"administration" => ["php/view/","administration","Administration"],
	"adminProduitListe" => ["php/view/","adminProduitListe","Liste des Produits"],
	"adminUtilisateurListe" => ["php/view/","adminUtilisateurListe","Liste des Utilisateurs"],
	"adminProduitForm" => ["php/view/","adminProduitForm","Formulaire des Produits"],
	"adminUtilisateurForm" => ["php/view/","adminUtilisateurForm","Formulaire des Utilisateurs"],
	"adminProduitAction" => ["php/view/","adminProduitAction",""],
	"adminUtilisateurAction" => ["php/view/","adminUtilisateurAction",""],
	"historique" => ["php/view/","historique","Historique"],
	"production" => ["php/view/","production","Production"],
	"productionAction" => ["php/view/","productionAction","Production"],
	"productionFin" => ["php/view/","productionFin","Production"],
	"productionForm" => ["php/view/","productionForm","Nouvelle Production"],
	"productionRecap" => ["php/view/","productionRecap","Recapitulatif de Production"],
];
//Si une route est demandée
if(isset($_GET["action"])){
    $action = $_GET["action"];
    //Si cette route existe
    if(isset($routes[$action])){
        //Afficher la page correspondante
        AfficherPage($routes[$action]);
    }else{
        //Sinon afficher la page par defaut
        AfficherPage($routes["default"]);
    }
}else{
    //Sinon afficher la page par defaut
    AfficherPage($routes["default"]);
}
=======
    if (file_exists("PHP/controller/" . $classe . ".Class.php")) {
        require "PHP/controller/" . $classe . ".Class.php";
    }

    if (file_exists("PHP/model/" . $classe . ".Class.php")) {
        require "PHP/model/" . $classe . ".Class.php";
    }

}
require 'PHP/model/DbConnect.Class.php';

spl_autoload_register("ChargerClasse");
function afficherPage($chemin, $page, $titre) {
	require  'PHP/view/head.php';
	require  'PHP/view/header.php';
	require ($chemin .$page);
	require 'PHP/view/footer.php';
}

DbConnect::init();
session_start();
// A l'include de la page Route, le code suivant est exécuté
// Si la variable $get existe, on exploite les informations pour afficher la bonne page
 if (isset ( $_GET ['action'] )) {
	// En fonction de ce que contient la variable action de $_GET, on ouvre la page correspondante
	
	switch ($_GET ['action']) {
		
		case 'nouveauUser' :
			{
				afficherPage ( 'PHP/view/', 'FormEnregistrement.php', "Nouvel Utilisateur" );
				break;
			}
		case 'connect' :
			{
				afficherPage ( 'PHP/view/', 'connexionForm.php', "Connection" );
				break;
			}
		case 'deconnect' :
			{
				afficherPage ( 'PHP/view/', 'FormDeconnection.php', "Deconnection" );
				break;
			}
		case "ClientAction":
			afficherPage('PHP/view/',"ClientAction.php","");
			break;
		case "ClientForm":
			afficherPage('PHP/view/',"ClientForm.php","Gestion des messages");
			break;
		case "ClientListe":
			afficherPage('PHP/view/',"ClientListe.php","Liste des messages");
			break;
	}
} else { // Sinon, on affiche la page principale du site
	afficherPage ( 'PHP/view/', 'connexionForm.php', "Connection" );
} 
>>>>>>> 86f7ef324470baa8a9cfb2f459cec641e18d2d39

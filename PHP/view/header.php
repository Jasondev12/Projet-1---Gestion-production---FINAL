<?php
//Attribution des variables de session
<<<<<<< HEAD
$lvl=(isset($_SESSION['level']))?(int) $_SESSION['level']:0;
=======
$lvl=(isset($_SESSION['level']))?(int) $_SESSION['level']:1;
>>>>>>> 86f7ef324470baa8a9cfb2f459cec641e18d2d39
$id=(isset($_SESSION['id']))?(int) $_SESSION['id']:0;
$pseudo=(isset($_SESSION['pseudo']))?$_SESSION['pseudo']:'';
?>


<body>
<<<<<<< HEAD

<div class="nav">
	<img class="site-logo" src="MEDIAS/IMAGES/logoafpa.png" alt="">
    <h1 class="titrenav">Gestion de production</h1>
</div>

<?php
if($lvl > 0){

    echo '<div class="bouton-nav">
        <a href="index.php">Accueil</a>
        <a href="index.php?action=productionForm">Nouvelle production</a>
        <a href="index.php?action=historique">Historique</a>';


    if($lvl > 1){
        echo '<a href="index.php?action=administration">Administration</a>';
    }

    echo '<a href="index.php?action=deconnexion">Déconnexion</a>
</div>';

}

=======
<div class="nav">
    <h1 class="titrenav">Gestion de production</h1>
<div class="bouton-nav">
    <a href="#">Accueil</a>
    <a href="#">Nouvelle production</a>
    <a href="#">Historique</a>
    <a href="#">Administration</a>
    <a href="#">Déconnexion</a>
</div>
</div>
>>>>>>> 86f7ef324470baa8a9cfb2f459cec641e18d2d39

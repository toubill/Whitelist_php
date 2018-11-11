<?php
// Calls for the config file
include( "connexionbdd.php" );

// Requête install
$req = $bdd->prepare('INSERT INTO whitelist (identifier) VALUES(?)');
$req->execute(array($_POST["steamid"]));

// Annonce la réussite
echo "L'utilisateur à bien été inscrit à la Whitelist";

?>
</br>
<a href="whitelistindex.php"> Retour à l'utilitaire d'ajout de Whitelist </a>

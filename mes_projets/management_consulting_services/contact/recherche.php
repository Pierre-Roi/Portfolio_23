<?php
// Connexion à la base de données
$bdd = new PDO('mysql:host=localhost;dbname=mcs', 'root', '');

// Récupération de la valeur de la barre de recherche
$recherche = $_GET['recherche'];

// Requête SQL pour rechercher dans la base de données
$resultats = $bdd->query("SELECT * FROM recherches WHERE ecole LIKE '%$recherche%'");

// Affichage des résultats
while ($donnees = $resultats->fetch()) {
    echo $donnees['ecole'];
    echo $donnees['formations'];
}

// Fermeture de la connexion à la base de données
$resultats->closeCursor();
?>

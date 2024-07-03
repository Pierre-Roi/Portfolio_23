<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mcs";

// Création de la connexion à la base de données
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Vérification de la connexion
if (!$conn) {
	die("Connexion échouée: " . mysqli_connect_error());
}

// Récupération des données du formulaire
$nom = $_POST["nom"];
$date_naissance = $_POST["date_naissance"];
$pays_naissance = $_POST["pays_naissance"]; 
$email = $_POST["email"];
$telephone = $_POST["telephone"];
$ecole_choisie = $_POST["ecole_choisie"];
$formation_choisie = $_POST["formation_choisie"];
$niveau_etude = $_POST["niveau_etude"];

// Insertion des données dans la base de données
$sql = "INSERT INTO ecole (nom, date_naissance, pays_naissance, email, telephone, ecole_choisie, formation_choisie, niveau_etude) VALUES ('$nom', '$pays_naissance', '$pays_naissance', '$email', '$telephone', '$ecole_choisie', '$formation_choisie', '$niveau_etude')";

if (mysqli_query($conn, $sql)) {
	echo "<p style=''>Votre inscription a été prise en compte, maintenant nous allons passer à l'etape de votre admission en vous faissant passer un entretien et un teste d'admission dans l'école choisie !, vous serez contactez dans très peu de temps. Merci et à très bientôt. <button><a href='ecole.php'>Retour vers le formulaire</a></button></p>";
} else {
	echo "Erreur: " . $sql . "<br>" . mysqli_error($conn);
}

// Fermeture de la connexion
mysqli_close($conn);
?>
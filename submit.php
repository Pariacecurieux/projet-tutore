<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cadastre_mobilier";

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
}

$adresse = $_POST['adresse'];
$quartier = $_POST['quartier'];
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];
$proprietaire_id = $_POST['proprietaire_id'];

$sql = "INSERT INTO propriete (adresse, quartier, latitude, longitude, proprietaire_id)
VALUES ('$adresse', '$quartier', '$latitude', '$longitude', '$proprietaire_id')";

if ($conn->query($sql) === TRUE) {
    echo "Nouvelle propriété ajoutée avec succès";
} else {
    echo "Erreur : " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("Location: formulaire.html");
exit();
?>

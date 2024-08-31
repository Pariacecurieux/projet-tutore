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

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$adresse = $_POST['adresse'];
$telephone = $_POST['telephone'];
$email = $_POST['email'];
$date_naissance = $_POST['date_naissance'];
$nationalite = $_POST['nationalite'];

$sql = "INSERT INTO proprietaire (nom, prenom, adresse, telephone, email, date_naissance, nationalite)
VALUES ('$nom', '$prenom', '$adresse', '$telephone', '$email', '$date_naissance', '$nationalite')";

if ($conn->query($sql) === TRUE) {
    echo "Nouveau propriétaire ajouté avec succès";
} else {
    echo "Erreur : " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("Location: formulaire_proprietaire.html");
exit();
?>

<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cadastre_mobilier";

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connexion échouée : " . $conn->connect_error);
}

// Récupérer les données du formulaire
$date_consultation = $_POST['date_consultation'];
$propriete_id = $_POST['propriete_id'];

// Préparer la requête SQL pour insérer les données
$sql = "INSERT INTO consultation (date_consultation, propriete_id) VALUES ('$date_consultation', '$propriete_id')";

// Exécuter la requête et vérifier si l'insertion a réussi
if ($conn->query($sql) === TRUE) {
    echo "Nouvelle consultation enregistrée avec succès";
    // Redirection vers le formulaire après succès
    header("Location: formulaire.html");
} else {
    echo "Erreur : " . $sql . "<br>" . $conn->error;
}

// Fermer la connexion
$conn->close();
?>


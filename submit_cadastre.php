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

// Préparer les données
$numero_parcelle = $conn->real_escape_string($_POST['numero_parcelle']);
$propriete_id = $conn->real_escape_string($_POST['propriete_id']);
$surface_parcelle = $conn->real_escape_string($_POST['surface_parcelle']);
$type_terrain = $conn->real_escape_string($_POST['type_terrain']);

// Créer la requête SQL
$sql = "INSERT INTO cadastre (numero_parcelle, propriete_id, surface_parcelle, type_terrain)
VALUES ('$numero_parcelle', '$propriete_id', '$surface_parcelle', '$type_terrain')";

// Exécuter la requête
if ($conn->query($sql) === TRUE) {
    echo "Nouveau cadastre ajouté avec succès";
} else {
    echo "Erreur : " . $sql . "<br>" . $conn->error;
}

// Fermer la connexion
$conn->close();

// Rediriger vers la page du formulaire de cadastre
header("Location: formulaire_cadastre.html");
exit();
?>

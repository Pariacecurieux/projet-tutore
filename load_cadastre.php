<?php
header('Content-Type: application/json');

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

$sql = "SELECT * FROM cadastre";
$result = $conn->query($sql);

$cadastres = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $cadastres[] = $row;
    }
}

$conn->close();

echo json_encode($cadastres);
?>

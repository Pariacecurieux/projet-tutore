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

// Récupérer les enregistrements des consultations
$sql = "SELECT consultation_id, date_consultation, propriete_id FROM consultation";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Générer le HTML pour le tableau
    echo "<table>
            <thead>
                <tr>
                    <th>ID Consultation</th>
                    <th>Date et Heure de Consultation</th>
                    <th>ID de la Propriété</th>
                </tr>
            </thead>
            <tbody>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['consultation_id'] . "</td>
                <td>" . $row['date_consultation'] . "</td>
                <td>" . $row['propriete_id'] . "</td>
              </tr>";
    }

    echo "  </tbody>
          </table>";
} else {
    echo "<p>Aucune consultation trouvée.</p>";
}

// Fermer la connexion
$conn->close();
?>

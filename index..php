<?php

// Connexion à la base de données
// Changer ID/MDP
$db_server = "127.0.0.1";
$db_username = "XXX";
$db_password = "XXXXX";
$db_name = "mon_site";

$co = new mysqli($db_server, $db_username, $db_password, $db_name);
$conn = $co;

// Vérification de la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['valider'])) {
    if (!empty($_POST['message'])) {
        $message = $_POST["message"];
        
        // Correction de la requête SQL d'insertion
        $query3 = "INSERT INTO messages (message) VALUES ('$message')";
        
        if ($co->query($query3) === TRUE) {
            header('Location: ' . $_SERVER['PHP_SELF']);
            exit();
        } else {
            echo "Erreur lors de l'ajout du message: " . $co->error;
        }
    } else {
        echo 'Veuillez compléter tous les champs [!]';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Mon site</title>
</head>
<body>
    <h1>messages_liste.php</h1>
    <br>
    Nombre de messages dans la base : 
    <?php 
    $sql2 = "SELECT * FROM messages ORDER BY id";
    if ($result2 = mysqli_query($conn, $sql2)) {
        // Nombre de lignes dans le jeu de résultats
        $rowcount = mysqli_num_rows($result2);
        echo $rowcount;
        
        // Libération du jeu de résultats
        mysqli_free_result($result2);
    }
    ?>
    <br><br>
    Liste des messages :
    <br>
    <?php
    $sql = "SELECT * FROM messages";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // Affichage des données de chaque ligne
        while ($row = $result->fetch_assoc()) {
            echo " " . htmlspecialchars($row["message"]) . "<br>";
        }
    } else {
        echo "0 results";
    }
    ?>
    <br>
    
    <h1>Recherche de messages</h1>
    <br>
    <input type="text" style="width:500px" />
    <input type="submit" value="Chercher"/>
    <br>
    <h1>Insertion de messages</h1>
    <br>
    Message:<br>
    <form method="post">
        <input type="text" name="message" style="width:500px" />
        <input type="submit" name="valider" value="Ajouter"/>
    </form>
</body>
</html>

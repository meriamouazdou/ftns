<?php
header("Access-Control-Allow-Origin: *"); // Autoriser toutes les origines (à des fins de démonstration)
header("Access-Control-Allow-Methods: POST, GET, OPTIONS"); // Autoriser les méthodes POST, GET et OPTIONS
header("Access-Control-Allow-Headers: Content-Type"); // Autoriser le type de contenu "Content-Type"

include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            echo "Connexion réussie, bienvenue " . $row['username'] . "!";
        } else {
            echo "Mot de passe incorrect.";
        }
    } else {
        echo "Aucun utilisateur trouvé avec ce nom d'utilisateur.";
    }
    
    $conn->close();
}
?>
<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            echo "Connexion réussie, bienvenue " . $row['username'] . "!";
        } else {
            echo "Mot de passe incorrect.";
        }
    } else {
        echo "Aucun utilisateur trouvé avec ce nom d'utilisateur.";
    }
    
    $conn->close();
}
?>

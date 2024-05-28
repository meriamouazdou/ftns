<?php
$servername = "localhost";
$username = "root";  // Par défaut sous XAMPP
$password = "";
$dbname = "ftns";

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

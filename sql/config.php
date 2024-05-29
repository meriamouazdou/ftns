<?php
include ("include.php");
header("Access-Control-Allow-Origin: *"); // Autoriser toutes les origines (à des fins de démonstration)
header("Access-Control-Allow-Methods: POST, GET, OPTIONS"); // Autoriser les méthodes POST, GET et OPTIONS
header("Access-Control-Allow-Headers: Content-Type"); // Autoriser le type de contenu "Content-Type"

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

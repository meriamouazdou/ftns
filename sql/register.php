<?php
header("Access-Control-Allow-Origin: *"); // Autoriser toutes les origines (à des fins de démonstration)
header("Access-Control-Allow-Methods: POST, GET, OPTIONS"); // Autoriser les méthodes POST, GET et OPTIONS
header("Access-Control-Allow-Headers: Content-Type"); // Autoriser le type de contenu "Content-Type"

include 'config.php';

$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$email = $_POST['email'];
$height = $_POST['height'];
$weight = $_POST['weight'];

$sql = "INSERT INTO users (username, password, email, poids, taille) VALUES ('$username', '$password', '$email', '$weight', '$height')";

if (mysqli_query($conn, $sql)) {
    echo json_encode(["success" => true]);
} else {
    echo json_encode(["success" => false, "error" => mysqli_error($conn)]);
}

mysqli_close($conn);
?>

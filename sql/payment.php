<?php
header("Access-Control-Allow-Origin: *"); // Autoriser toutes les origines (à des fins de démonstration)
header("Access-Control-Allow-Methods: POST, GET, OPTIONS"); // Autoriser les méthodes POST, GET et OPTIONS
header("Access-Control-Allow-Headers: Content-Type"); // Autoriser le type de contenu "Content-Type"

include ("include.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cardNumber = $_POST['cardNumber'];
    $expiry = $_POST['expiry'];
    $cvv = $_POST['cvv'];

    $sql = "INSERT INTO payments (card_number, expiry_date, cvv) VALUES ('$cardNumber', '$expiry', '$cvv')";

    if ($conn->query($sql) === TRUE) {
        echo "Paiement réussi !";
    } else {
        echo "Erreur: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
}
?>

<?php
include 'config.php';

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

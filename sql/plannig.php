<?php
session_start();
include 'db.php';

if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userId = $_SESSION['user_id'];
    $planningId = $_POST['planning_id'];
    $cardNumber = $_POST['card_number'];
    $expiryDate = $_POST['expiry_date'];
    $cvv = $_POST['cvv'];

    $sql = "INSERT INTO planning_purchases (user_id, planning_id, card_number, expiry_date, cvv) 
            VALUES ('$userId', '$planningId', '$cardNumber', '$expiryDate', '$cvv')";

    if ($conn->query($sql) === TRUE) {
        echo "Planning choisi avec succès";
    } else {
        echo "Erreur : " . $sql . "<br>" . $conn->error;
    }
}
?>

<!-- Payment Form -->
<form method="post" action="planning.php">
    <input type="hidden" name="planning_id" value="1"> <!-- Change to dynamic planning ID -->
    Numéro de carte: <input type="text" name="card_number" required><br>
    Date d'expiration: <input type="text" name="expiry_date" required><br>
    CVV: <input type="text" name="cvv" required><br>
    <input type="submit" value="Payer">
</form>

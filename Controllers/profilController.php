<?php
// profilController.php

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['download_button'])) {
    $fileName = "CommandeRecap.txt";  // Nom du fichier de téléchargement
    header('Content-Type: text/plain');
    header('Content-Disposition: attachment; filename="' . $fileName . '"');

    // Initialiser la variable $userInfo
    $userInfo = "";

    // Ajouter les informations de la commande
    $userInfo .= "Order Number: " . $_POST['idCommande'] . "\r\n";

    $userInfo .= "\r\n\r\n-------------------------\r\n";
    $userInfo .= "Customer Information\r\n";
    $userInfo .= "-------------------------\r\n";
    $userInfo .= "Name: " . $_POST['user_name'] . "\r\n";
    $userInfo .= "Email: " . $_POST['user_email'] . "\r\n";
    $userInfo .= "Phone Number: " . $_POST['user_number'] . "\r\n";
    $userInfo .= "Country: " . $_POST['user_country'] . "\r\n";
    $userInfo .= "Address: " . $_POST['user_address'] . "\r\n";
    $userInfo .= "Postal Code: " . $_POST['user_postal_code'] . "\r\n";
    $userInfo .= "Specification: " . $_POST['user_specification'] . "\r\n";

    $userInfo .= "\r\n\r\n-------------------------\r\n";
    $userInfo .= "Purchase List\r\n";
    $userInfo .= "-------------------------\r\n";
    
    foreach ($_POST['article'] as $pieceId => $pieceInfo) {
        $userInfo .= "\r\nItem ID: " . $pieceId . "\r\n";
        $userInfo .= "Item Name: " . $pieceInfo['name'] . "\r\n";
        $userInfo .= "Price: " . $pieceInfo['price'] . "€\r\n";
        $userInfo .= "Color: " . $pieceInfo['color'] . "\r\n";
        $userInfo .= "Format: " . $pieceInfo['format'] . "\r\n";
        $userInfo .= "Quantity: " . $pieceInfo['quantity'] . "\r\n";
    }

    $userInfo .= "\r\n\r\n-------------------------\r\n";
    $userInfo .= "Order Information\r\n";
    $userInfo .= "-------------------------\r\n";
    $userInfo .= "Order Status: " . $_POST['titre'] . "\r\n";
    $userInfo .= "Delivery Type: " . $_POST['livreur'] . "\r\n";
    $userInfo .= "Total Amount: " . $_POST['total'] . "€" ."\r\n";

    // Écrire les informations dans le fichier
    file_put_contents($fileName, $userInfo);

    // Envoyer le fichier au navigateur
    readfile($fileName);

    // Supprimer le fichier après le téléchargement
    unlink($fileName);

    // Assurez-vous de terminer l'exécution du script après le téléchargement
    exit;
} else {
    // Gérer le cas où le formulaire n'a pas été soumis correctement
    header("Location: ../view/error_page.php");
    exit;
}
?>

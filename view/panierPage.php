<?php
include_once '../view/includes.php';

require_once("../Models/DBModel.php");
require_once("../Models/ordreModel.php");
require_once("../Models/commandeModel.php");
require_once("../Models/pieceModel.php");
require_once("../Models/utilisateurModel.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panier</title>
    <link rel="stylesheet" href="../styles/siteLego.css">
</head>
<body>
    <div class="Panier">
    <h1>Shopping cart</h1>
    <?php include_header_client(); ?>

    <main>
    <?php 
            // if an error happened
            if (isset($something_to_say)) {
                echo "<div class='something_to_say'>";
                echo "<h2> $something_to_say </h2>";
                echo "</div>";
            }
    ?>

    <?php

    session_start();

    $total_price = 0;
    
    if (isset($_SESSION['id'])) {
        $userModel = new UserModel();
        $commandeModel = new CommandeModel();
        $ordreModel = new OrdreModel();
        $pieceModel = new PieceModel();

        $id_utilisateur = $_SESSION['id'];

        // Récupérez les commandes en cours pour cet utilisateur
        $commandesEnCours = $commandeModel->get_commande($id_utilisateur, 0);

        // Parcourez chaque commande en cours
        foreach ($commandesEnCours as $commande) {
            $commandeId = $commande['id'];

            // Récupérez les détails des articles pour cette commande
            $articlesCommande = $ordreModel->get_ordre($commandeId);

            // Parcourez chaque article pour cette commande
            foreach ($articlesCommande as $article) {
                $pieceId = $article['id_piece'];
                $quantity = $article['quantity'];
                $pieceName = $pieceModel->get_name($pieceId)['name'];
                $piecePrice = $pieceModel->get_price($pieceId)['price'];
                $pieceColor = $pieceModel->get_color($pieceId)['color'];
                $pieceFormat = $pieceModel->get_format($pieceId)['format'];

                $total_price = $total_price + $quantity * $piecePrice;

                echo "<div class='cart'>";
                echo "<div class='item'>";

                echo "<img src='../figs/brique$pieceFormat$pieceColor.PNG' alt='Product Image'>";

                echo "<div class='item-details'>";
                echo "<h2>{$pieceName}</h2>";
                echo "<p>Price: {$piecePrice} €</p>";
                echo "<p>Quantity: $quantity</p>";
                echo "</div>";
                echo "<form method='post' action='../Controllers/panierController.php'>";
                echo "<input type='hidden' name='id_ordre' value='{$article['id']}'>";
                echo "<input type='hidden' name='price' value='{$piecePrice}'>";
                echo "<input type='hidden' name='commande' value='{$commandeId}'>";
                echo "<input type='hidden' name='pieceName' value='{$pieceName}'>";
                echo "<input type='hidden' name='quantity' value='{$quantity}'>";
                echo "<button type='submit' name='remove_btn' class='remove_btn' placeholder='remove_btn'>Remove</button>";
                echo "</form>";
                echo "</div>";
                echo "</div>";
            }
        }
    }

    ?>

        <div class="total">
            <p>Total: <?php echo $total_price?> €</p>

            <?php
            if ($total_price != 0){
                echo "<form method='post' action='../Controllers/navOngletClient.php'>";
                echo "<button type='submit' class='change_button' name='checkoutButton'>Checkout</button>";
                echo "</form>";
            }
            else{
                echo "<form method='post' action='../Controllers/navOngletClient.php'>";
                echo "<button type='submit' class='change_button' name='checkoutButtonEmpty'>Checkout</button>";
                echo "</form>";
            }
            ?>
        </div>

    </main>
    <?php include_footer_client(); ?>
    </div>

</body>
</html>
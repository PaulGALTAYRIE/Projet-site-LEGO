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
    <h1>Panier</h1>
    <?php include_header_client(); ?>

    <main>
    <?php

    session_start();

    if (isset($_SESSION['id'])) {
        $userModel = new UserModel();
        $commandeModel = new CommandeModel();
        $ordreModel = new OrdreModel();
        $pieceModel = new PieceModel();

        $id_utilisateur = $_SESSION['id'];

        $total_price = 0;

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

                echo "<img src='../figs/brique $pieceFormat $pieceColor.PNG' alt='Product Image'>";

                echo "<div class='item-details'>";
                echo "<h2>{$pieceName}</h2>";
                echo "<p>Price: {$piecePrice} €</p>";
                echo "<p>Quantity: $quantity</p>";
                echo "</div>";
                echo "<button class='remove-btn'>Remove</button>";
                echo "</div>";
                echo "</div>";
            }
        }
    }

    ?>

        <div class="total">
            <p>Total: <?php echo $total_price?> €</p>

            <form method="post" action="../Controllers/navOngletClient.php">
                <button type="submit" name="checkoutButton">Checkout</button>
            </form>
        </div>

    </main>
    <?php include_footer_client(); ?>
    </div>

</body>
</html>






<?php
/*
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
        <h1>Panier</h1>
        <?php include_header_client(); ?>

        <main>
            <div class="cart">
                <div class="item">
                    <img src="https://via.placeholder.com/100" alt="Product Image">
                    <div class="item-details">
                        <h2>Product Name</h2>
                        <p>Description of the product.</p>
                        <p>Price: $10.00</p>
                    </div>
                    <button class="remove-btn">Remove</button>
                </div>
                <!-- Add more items here if needed -->
            </div>
            <div class="total">
                <p>Total: $0.00</p>

                <form method="post" action="../Controllers/navOngletClient.php">
                    <button type="submit" name="checkoutButton">Checkout</button>
                </form>
            </div>
        </main>

        <?php include_footer_client(); ?>
    </div>
</body>
</html>
*/
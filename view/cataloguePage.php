<?php
include_once '../view/includes.php';
require_once("../Models/pieceModel.php");

$pieceModel = new PieceModel();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogue LEGO</title>
    <link rel="stylesheet" href="../styles/siteLego.css">
</head>
<body id="catalogue">

    <h1>Catalogue</h1>
    <?php include_header_client(); ?>

    <main>
    <div class="backgroundBlur"></div>
    <div class="catalogue">

    <?php 
            // if an error happened
            if (isset($something_to_say)) {
                print_r($something_to_say);
            }
        ?>

        <div class="pack1">
            <img src="../figs/brique 2x3 rouge.PNG" alt="Pièce LEGO rouge">
            <p>Brick 2x3 red</p>
            <?php
                $result = $pieceModel->get_quantity_price("Brick 2x3 red");
                echo("<p>Quantity = $result[quantity]</p>");
                echo("<p>Price = $result[price] €</p>");
            ?>
            <form method="post" action="../Controllers/addPiece.php">
            <input type="hidden" name="product_type" value="Brick 2x3 red">
            <input type="int" name="quantity" id="quantity" placeholder="quantity"><br><br>
            <button type="submit" name="ajoutAchatButton" id="ajoutAchat" placeholder="ajoutAchat">Ajouter</button>
            </form>
        </div>

        <div class="pack1">
            <img src="../figs/brique 2x3 bleue.PNG" alt="Pièce LEGO bleue">
            <p>Brick 2x3 blue</p>
            <?php
                $result = $pieceModel->get_quantity_price("Brick 2x3 blue");
                echo("<p>Quantity = $result[quantity]</p>");
                echo("<p>Price = $result[price] €</p>");
            ?>
        </div>
        <div class="pack1">
            <img src="../figs/brique 2x3 verte.PNG" alt="Pièce LEGO verte">
            <p>Brick 2x3 green</p>
            <?php
                $result = $pieceModel->get_quantity_price("Brick 2x3 green");
                echo("<p>Quantity = $result[quantity]</p>");
                echo("<p>Price = $result[price] €</p>");
            ?>
        </div>
        <div class="pack1">
            <img src="../figs/brique 2x3 jaune.PNG" alt="Pièce LEGO jaune">
            <p>Brick 2x3 yellow</p>
            <?php
                $result = $pieceModel->get_quantity_price("Brick 2x3 yellow");
                echo("<p>Quantity = $result[quantity]</p>");
                echo("<p>Price = $result[price] €</p>");
            ?>
        </div>
        <div class="pack1">
            <img src="../figs/brique 2x3 orange.PNG" alt="Pièce LEGO orange">
            <p>Brick 2x3 orange</p>
            <?php
                $result = $pieceModel->get_quantity_price("Brick 2x3 orange");
                echo("<p>Quantity = $result[quantity]</p>");
                echo("<p>Price = $result[price] €</p>");
            ?>
        </div>
        <div class="pack2">
            <img src="../figs/brique 2x3 noire.PNG" alt="Pièce LEGO noire">
            <p>Brick 2x3 black</p>
            <?php
                $result = $pieceModel->get_quantity_price("Brick 2x3 black");
                echo("<p>Quantity = $result[quantity]</p>");
                echo("<p>Price = $result[price] €</p>");
            ?>
        </div>
        <div class="pack2">
            <img src="../figs/brique 2x3 violette.PNG" alt="Pièce LEGO violette">
            <p>Brick 2x3 purple</p>
            <?php
                $result = $pieceModel->get_quantity_price("Brick 2x3 purple");
                echo("<p>Quantity = $result[quantity]</p>");
                echo("<p>Price = $result[price] €</p>");
            ?>
        </div>
        <div class="pack2">
            <img src="../figs/brique 2x3 rose.PNG" alt="Pièce LEGO rose">
            <p>Brick 2x3 pink</p>
            <?php
                $result = $pieceModel->get_quantity_price("Brick 2x3 pink");
                echo("<p>Quantity = $result[quantity]</p>");
                echo("<p>Price = $result[price] €</p>");
            ?>
        </div>
        <div class="pack2">
            <img src="../figs/brique 2x3 grise.PNG" alt="Pièce LEGO grise">
            <p>Brick 2x3 grey</p>
            <?php
                $result = $pieceModel->get_quantity_price("Brick 2x3 grey");
                echo("<p>Quantity = $result[quantity]</p>");
                echo("<p>Price = $result[price] €</p>");
            ?>
        </div>
        <div class="pack2">
            <img src="../figs/brique 2x3 blanche.PNG" alt="Pièce LEGO blanche">
            <p>Brick 2x3 white</p>
            <?php
                $result = $pieceModel->get_quantity_price("Brick 2x3 white");
                echo("<p>Quantity = $result[quantity]</p>");
                echo("<p>Price = $result[price] €</p>");
            ?>
        </div>
        <div class="pack3">
            <img src="../figs/brique 2x2 rouge.PNG" alt="Pièce LEGO rouge">
            <p>Brick 2x2 red</p>
            <?php
                $result = $pieceModel->get_quantity_price("Brick 2x2 red");
                echo("<p>Quantity = $result[quantity]</p>");
                echo("<p>Price = $result[price] €</p>");
            ?>
        </div>
        <div class="pack3">
            <img src="../figs/brique 2x2 bleue.PNG" alt="Pièce LEGO bleue">
            <p>Brick 2x2 blue</p>
            <?php
                $result = $pieceModel->get_quantity_price("Brick 2x2 blue");
                echo("<p>Quantity = $result[quantity]</p>");
                echo("<p>Price = $result[price] €</p>");
            ?>
        </div>
        <div class="pack3">
            <img src="../figs/brique 2x2 verte.PNG" alt="Pièce LEGO verte">
            <p>Brick 2x2 green</p>
            <?php
                $result = $pieceModel->get_quantity_price("Brick 2x2 green");
                echo("<p>Quantity = $result[quantity]</p>");
                echo("<p>Price = $result[price] €</p>");
            ?>
        </div>
        <div class="pack3">
            <img src="../figs/brique 2x2 jaune.PNG" alt="Pièce LEGO jaune">
            <p>Brick 2x2 yellow</p>
            <?php
                $result = $pieceModel->get_quantity_price("Brick 2x2 yellow");
                echo("<p>Quantity = $result[quantity]</p>");
                echo("<p>Price = $result[price] €</p>");
            ?>
        </div>
        <div class="pack3">
            <img src="../figs/brique 2x2 orange.PNG" alt="Pièce LEGO orange">
            <p>Brick 2x2 orange</p>
            <?php
                $result = $pieceModel->get_quantity_price("Brick 2x2 orange");
                echo("<p>Quantity = $result[quantity]</p>");
                echo("<p>Price = $result[price] €</p>");
            ?>
        </div>
        <div class="pack4">
            <img src="../figs/brique 2x2 noire.PNG" alt="Pièce LEGO noire">
            <p>Brick 2x2 black</p>
            <?php
                $result = $pieceModel->get_quantity_price("Brick 2x2 black");
                echo("<p>Quantity = $result[quantity]</p>");
                echo("<p>Price = $result[price] €</p>");
            ?>
        </div>
        <div class="pack4">
            <img src="../figs/brique 2x2 violette.PNG" alt="Pièce LEGO violette">
            <p>Brick 2x2 purple</p>
            <?php
                $result = $pieceModel->get_quantity_price("Brick 2x2 purple");
                echo("<p>Quantity = $result[quantity]</p>");
                echo("<p>Price = $result[price] €</p>");
            ?>
        </div>
        <div class="pack4">
            <img src="../figs/brique 2x2 rose.PNG" alt="Pièce LEGO rose">
            <p>Brick 2x2 pink</p>
            <?php
                $result = $pieceModel->get_quantity_price("Brick 2x2 pink");
                echo("<p>Quantity = $result[quantity]</p>");
                echo("<p>Price = $result[price] €</p>");
            ?>
        </div>
        <div class="pack4">
            <img src="../figs/brique 2x2 grise.PNG" alt="Pièce LEGO grise">
            <p>Brick 2x2 grey</p>
            <?php
                $result = $pieceModel->get_quantity_price("Brick 2x2 grey");
                echo("<p>Quantity = $result[quantity]</p>");
                echo("<p>Price = $result[price] €</p>");
            ?>
        </div>
        <div class="pack4">
            <img src="../figs/brique 2x2 blanche.PNG" alt="Pièce LEGO blanche">
            <p>Brick 2x2 white</p>
            <?php
                $result = $pieceModel->get_quantity_price("Brick 2x2 white");
                echo("<p>Quantity = $result[quantity]</p>");
                echo("<p>Price = $result[price] €</p>");
            ?>
        </div>
    </main>
    </div>

    <?php include_footer_client(); ?>

</body>
</html>

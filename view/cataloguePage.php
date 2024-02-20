<?php
include_once '../view/includes.php';
require_once("../Models/pieceModel.php");

$pieceModel = new PieceModel();
$brickTypes = [
    "2x3 red",
    "2x3 blue",
    "2x3 green",
    "2x3 yellow",
    "2x3 orange",
    "2x3 black",
    "2x3 purple",
    "2x3 pink",
    "2x3 grey",
    "2x3 white",
    "2x2 red",
    "2x2 blue",
    "2x2 green",
    "2x2 yellow",
    "2x2 orange",
    "2x2 black",
    "2x2 purple",
    "2x2 pink",
    "2x2 grey",
    "2x2 white"
];
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

            <?php foreach ($brickTypes as $brickType): ?>
                <div class="pack1">
                    <img src="../figs/brique <?php echo $brickType; ?>.PNG" alt="Pièce LEGO <?php echo $brickType; ?>">
                    <?php 
                    // if an error happened
                    if (isset($something_to_say)) {
                        print_r($something_to_say);
                    }
                    ?>
                    <p><?php echo $brickType; ?></p>
                    <?php
                        $result = $pieceModel->get_quantity_price("Brick $brickType");
                        echo("<p>Quantity = $result[quantity]</p>");
                        echo("<p>Price = $result[price] €</p>");
                    ?>
                    <form method="post" action="../Controllers/addPieceController.php">
                        <input type="hidden" name="product_type" value="Brick <?php echo $brickType; ?>">
                        <input type="int" name="quantity" id="quantity" placeholder="quantity"><br><br>
                        <button type="submit" name="ajoutAchatButton" class="ajoutAchat" placeholder="ajoutAchat">Ajouter</button>
                    </form>
                </div>
            <?php endforeach; ?>

        </div>
    </main>

    <?php include_footer_client(); ?>

</body>
</html>

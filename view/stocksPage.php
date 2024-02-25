<?php
include_once '../view/includes.php';
require_once("../Models/pieceModel.php");

$pieceModel = new PieceModel();
$brickTypes = [
    "2x3red",
    "2x3blue",
    "2x3green",
    "2x3yellow",
    "2x3orange",
    "2x3black",
    "2x3purple",
    "2x3pink",
    "2x3grey",
    "2x3white",
    "2x2red",
    "2x2blue",
    "2x2green",
    "2x2yellow",
    "2x2orange",
    "2x2black",
    "2x2purple",
    "2x2pink",
    "2x2grey",
    "2x2white"
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

    <h1>Stocks</h1>
    <?php include_header_admin(); ?>

    <main>
    <?php 
            // if an error happened
            if (isset($something_to_say)) {
                echo "<div class='something_to_say'>";
                echo "<h2> $something_to_say </h2>";
                echo "</div>";
            }
        ?>
            <div class="catalogue">

            <?php foreach ($brickTypes as $brickType): ?>
                <div class="pack">
                    <img src="../figs/brique<?php echo $brickType; ?>.PNG" alt="Pièce LEGO <?php echo $brickType; ?>">
                    <p><?php echo $brickType; ?></p>
                    <?php
                        $result = $pieceModel->get_quantity_price("Brick$brickType");
                        echo("<p>Quantity = $result[quantity]</p>");
                        echo("<p>Price = $result[price] €</p>");
                    ?>
                    <form method="post" action="../Controllers/stocksPageController.php">
                        <input type="hidden" name="product_type" value="Brick<?php echo $brickType; ?>">
                        <input type="number" name="quantity"><br><br>
                        <button type="submit" name="setStocksButton" class="setStocks">Set</button>
                    </form>
                </div>
            <?php endforeach; ?>

        </div>
    </main>

    <?php include_footer_admin(); ?>

</body>
</html>

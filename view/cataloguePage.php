<?php
include_once '../view/includes.php';
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

    <div class="pack1">
    <img src="../figs/brique 2x3 rouge.PNG" alt="Pièce LEGO rouge">
    <p>Brick 2x3 red</p>
    <p>Prix : $1.99</p>
    <a href="../Controllers/ajouterAuPanier.php?id_produit=1">Ajouter au panier</a>
</div>

        <div class="pack2">
            <img src="../figs/brique 2x3 noire.PNG" alt="Pièce LEGO noire">
            <p>Brick 2x3 black</p>
            <p>Prix : $1.99</p>
        </div>
        <div class="pack2">
            <img src="../figs/brique 2x3 violette.PNG" alt="Pièce LEGO violette">
            <p>Brick 2x3 purple</p>
            <p>Prix : $1.99</p>
        </div>
        <div class="pack2">
            <img src="../figs/brique 2x3 rose.PNG" alt="Pièce LEGO rose">
            <p>Brick 2x3 pink</p>
            <p>Prix : $1.99</p>
        </div>
        <div class="pack2">
            <img src="../figs/brique 2x3 grise.PNG" alt="Pièce LEGO grise">
            <p>Brick 2x3 grey</p>
            <p>Prix : $1.99</p>
        </div>
        <div class="pack2">
            <img src="../figs/brique 2x3 blanche.PNG" alt="Pièce LEGO blanche">
            <p>Brick 2x3 white</p>
            <p>Prix : $1.99</p>
        </div>
        <div class="pack3">
            <img src="../figs/brique 2x2 rouge.PNG" alt="Pièce LEGO rouge">
            <p>Brick 2x2 red</p>
            <p>Prix : $0.99</p>
        </div>
        <div class="pack3">
            <img src="../figs/brique 2x2 bleue.PNG" alt="Pièce LEGO bleue">
            <p>Brick 2x2 blue</p>
            <p>Prix : $0.99</p>
        </div>
        <div class="pack3">
            <img src="../figs/brique 2x2 verte.PNG" alt="Pièce LEGO verte">
            <p>Brick 2x2 green</p>
            <p>Prix : $0.99</p>
        </div>
        <div class="pack3">
            <img src="../figs/brique 2x2 jaune.PNG" alt="Pièce LEGO jaune">
            <p>Brick 2x2 yellow</p>
            <p>Prix : $0.99</p>
        </div>
        <div class="pack3">
            <img src="../figs/brique 2x2 orange.PNG" alt="Pièce LEGO orange">
            <p>Brick 2x2 orange</p>
            <p>Prix : $0.99</p>
        </div>
        <div class="pack4">
            <img src="../figs/brique 2x2 noire.PNG" alt="Pièce LEGO noire">
            <p>Brick 2x2 black</p>
            <p>Prix : $0.99</p>
        </div>
        <div class="pack4">
            <img src="../figs/brique 2x2 violette.PNG" alt="Pièce LEGO violette">
            <p>Brick 2x2 purple</p>
            <p>Prix : $0.99</p>
        </div>
        <div class="pack4">
            <img src="../figs/brique 2x2 rose.PNG" alt="Pièce LEGO rose">
            <p>Brick 2x2 pink</p>
            <p>Prix : $0.99</p>
        </div>
        <div class="pack4">
            <img src="../figs/brique 2x2 grise.PNG" alt="Pièce LEGO grise">
            <p>Brick 2x2 grey</p>
            <p>Prix : $0.99</p>
        </div>
        <div class="pack4">
            <img src="../figs/brique 2x2 blanche.PNG" alt="Pièce LEGO blanche">
            <p>Brick 2x2 white</p>
            <p>Prix : $0.99</p>
        </div>
    </main>
    </div>

    <?php include_footer_client(); ?>

</body>
</html>

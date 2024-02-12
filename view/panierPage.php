<?php
session_start();

include_once '../view/includes.php'; // Inclure les fichiers communs si nécessaire

?>

<!DOCTYPE html>
<html lang="fr">
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
            <div class="backgroundBlur"></div>
            <div class="cart">
                <?php
                // Vérifier si le panier existe dans la session et s'il n'est pas vide
                if (isset($_SESSION['panier']) && !empty($_SESSION['panier'])) {
                    // Connectez-vous à votre base de données ou incluez votre configuration de connexion

                    // Parcourez chaque produit dans le panier
                    foreach ($_SESSION['panier'] as $id_produit => $quantite) {
                        // Récupérez les informations sur le produit depuis la base de données
                        // Remplacez "votre_table_produits" par le nom de votre table
                        $query = "SELECT * FROM votre_table_produits WHERE id_produit = $id_produit";
                        // Exécutez la requête et récupérez les données du produit
                        // Ici, vous obtiendrez une ligne de données qui contient toutes les informations sur le produit
                        // Vous pouvez ensuite utiliser ces informations pour afficher le produit dans votre panier
                        // Supposons que vous ayez des colonnes nom_produit, description, prix, etc.

                        // Afficher chaque produit dans le panier
                        echo "<div class='item'>";
                        echo "<img src='image_produit.jpg' alt='Product Image'>";
                        echo "<div class='item-details'>";
                        echo "<h2>Nom du produit</h2>";
                        echo "<p>Description du produit.</p>";
                        echo "<p>Prix: $10.00</p>"; // Remplacez par le prix réel du produit
                        echo "</div>";
                        echo "<button class='remove-btn'>Supprimer</button>";
                        echo "</div>";
                    }
                } else {
                    // Si le panier est vide, affichez un message indiquant que le panier est vide
                    echo "Votre panier est vide.";
                }
                ?>
            </div>
            <div class="total">
                <!-- Afficher le total du panier ici -->
                <p>Total: $0.00</p>

                <!-- Formulaire pour passer à la caisse -->
                <form method="post" action="../Controllers/navOngletClient.php">
                    <button type="submit" name="checkoutButton">Payer</button>
                </form>
            </div>
        </main>

        <?php include_footer_client(); ?>
    </div>
</body>
</html>

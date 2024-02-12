<?php
session_start();

include_once '../view/includes.php'; // Inclure les fichiers communs si nécessaire

// Connexion à la base de données
$servername = "localhost";
$username = "tai_frog";
$password = "A6495AVLXR";
$dbname = "lego_web_site";

$connexion = new mysqli($servername, $username, $password, $dbname);

if ($connexion->connect_error) {
    die("Échec de la connexion : " . $connexion->connect_error);
}

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
                    foreach ($_SESSION['panier'] as $id_produit => $quantite) {
                        // Récupérer les informations sur le produit depuis la base de données
                        $sql = "SELECT * FROM piece WHERE id = $id_produit";
                        $resultat = $connexion->query($sql);

                        if ($resultat->num_rows > 0) {
                            // Afficher chaque produit dans le panier avec les informations réelles
                            while ($row = $resultat->fetch_assoc()) {
                                echo "<div class='item'>";
                                echo "<img src='image_produit.jpg' alt='Product Image'>";
                                echo "<div class='item-details'>";
                                echo "<h2>" . $row['nom'] . "</h2>";
                                echo "<p>Prix: $" . $row['prix'] . "</p>";
                                echo "</div>";
                                // Formulaire de suppression pour chaque produit
                                echo "<form method='post' action='../Controllers/supprimerDuPanier.php'>";
                                echo "<input type='hidden' name='id_produit' value='$id_produit'>";
                                echo "<button type='submit' class='remove-btn'>Supprimer</button>";
                                echo "</form>";
                                echo "</div>";
                            }
                        }
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

<?php
$connexion->close(); // Fermer la connexion à la base de données
?>

<?php
include_once '../view/includes.php';

require_once '../Models/utilisateurModel.php';
require_once '../Models/commandeModel.php';
require_once '../Models/livreurModel.php';
require_once '../Models/ordreModel.php';
require_once '../Models/pieceModel.php';

session_start();

$userModel = new UserModel();
$commandeModel = new CommandeModel();
$livreurModel = new LivreurModel();

$userId = isset($_SESSION['id']) ? $_SESSION['id'] : null; // Assurez-vous que $userId est défini

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link rel="stylesheet" href="../styles/siteLego.css">
</head>

<body id="ProfilPage">
    <div class="bandeau"></div>

    <h1>Profil</h1>
    <?php include_header_client(); ?>
    <main>

        <?php
        if (!is_null($userId)) {
            $user = $userModel->get_user_by_id($userId);

            echo "<div class='user_info_container'>";
            echo "<h1>User Information</h1>";
            echo "<p>Name: " . $user['name'] . "</p>";
            echo "<p>Email: " . $user['email'] . "</p>";
            echo "<p>Number: " . $user['number'] . "</p>";
            echo "<p>Country: " . $user['country'] . "</p>";
            echo "<p>Address: " . $user['adresse'] . "</p>";
            echo "<p>Postal Code: " . $user['code_postal'] . "</p>";
            echo "<p>Specification: " . $user['specification'] . "</p>";
            echo "</div>";

            echo "<form method='post' action='../Controllers/navOngletClient.php'>";
            echo "<button type='submit' name='change_button' class='change_button'>Change informations</button>";
            echo "</form>";
        } else {
            echo "<div class='user_info_container'>";
            echo "Connect yourself";
            echo "</div>";
            echo "</main>";
        }
        ?>

        <hr> <!-- Ligne de séparation -->

        <?php
        error_reporting(E_ALL);
        ini_set('display_errors', 1);

        function afficherCommandes($userId, $commandes, $titre, $livreurModel) {
            if (!empty($commandes)) {
                foreach ($commandes as $commande) {
                    $idCommande = $commande['id'];
                    $total = $commande['total'];

                    $idLivreur = isset($commande['id_livreur']) ? $livreurModel->get_name($commande['id_livreur']) : "Non spécifié";

                    echo "<div class='user_info_container'>";
                    echo "<h2>$titre</h2>";
                    echo "<p> Order Number: $idCommande</p>";
                    echo "<p> Delivery Type: " . $idLivreur . "</p>";
                    echo "<p>Total: $total €";

                    echo "<form method='post' action='../Controllers/profilController.php'>";

                    $userModel = new UserModel();
                    $user = $userModel->get_user_by_id($userId);

                    $pieceModel = new PieceModel();
                    $ordreModel = new OrdreModel();
                    $articlesCommande = $ordreModel->get_ordre($idCommande);

                    foreach ($articlesCommande as $article) {
                        $pieceId = $article['id_piece'];
                        $quantity = $article['quantity'];

                        $pieceInfo = [
                            'name'   => $pieceModel->get_name($pieceId)['name'],
                            'price'  => $pieceModel->get_price($pieceId)['price'],
                            'color'  => $pieceModel->get_color($pieceId)['color'],
                            'format' => $pieceModel->get_format($pieceId)['format'],
                            'quantity' => $quantity,
                        ];

                        foreach ($pieceInfo as $key => $value) {
                            echo "<input type='hidden' name='article[" . $pieceId . "][" . $key . "]' value='" . htmlspecialchars($value) . "'>";
                        }
                    }

                    echo "<input type='hidden' name='titre' value='" . htmlspecialchars($titre) . "'>";
                    echo "<input type='hidden' name='livreur' value='" . htmlspecialchars($idLivreur) . "'>";
                    echo "<input type='hidden' name='total' value='" . htmlspecialchars($total) . "'>";
                    echo "<input type='hidden' name='idCommande' value='" . htmlspecialchars($idCommande) . "'>";
                    echo "<input type='hidden' name='user_name' value='" . htmlspecialchars($user['name']) . "'>";
                    echo "<input type='hidden' name='user_email' value='" . htmlspecialchars($user['email']) . "'>";
                    echo "<input type='hidden' name='user_number' value='" . htmlspecialchars($user['number']) . "'>";
                    echo "<input type='hidden' name='user_country' value='" . htmlspecialchars($user['country']) . "'>";
                    echo "<input type='hidden' name='user_address' value='" . htmlspecialchars($user['adresse']) . "'>";
                    echo "<input type='hidden' name='user_postal_code' value='" . htmlspecialchars($user['code_postal']) . "'>";
                    echo "<input type='hidden' name='user_specification' value='" . htmlspecialchars($user['specification']) . "'>";

                    echo "<button type='submit' name='download_button' class='download_button' placeholder='download_button'>Download</button>";
                    echo "</form>";

                    echo "</div>";
                }
            } else {
                echo "<h2>$titre</h2>";
                echo "<p>Aucune commande dans cette catégorie</p>";
            }
        }

        $commande_0 = $commandeModel->get_commande($userId, 0);
        $commande_1 = $commandeModel->get_commande($userId, 1);
        $commande_2 = $commandeModel->get_commande($userId, 2);
        $commande_3 = $commandeModel->get_commande($userId, 3);

        if (!empty($commande_0)) {
            afficherCommandes($userId, $commande_0, "Order in Cart", $livreurModel);
        } else {
            echo "<div class='empty-message'>";
            echo "<h2>Order in Cart</h2>";
            echo "<p>Empty<p>";
            echo "</div>";
        }

        if (!empty($commande_1)) {
            afficherCommandes($userId, $commande_1, "Order in Validation Process", $livreurModel);
        } else {
            echo "<div class='empty-message'>";
            echo "<h2>Order in Validation Process</h2>";
            echo "<p>Empty<p>";
            echo "</div>";
        }

        if (!empty($commande_2)) {
            afficherCommandes($userId, $commande_2, "Order Validated, in Delivery Process", $livreurModel);
        } else {
            echo "<div class='empty-message'>";
            echo "<h2>Order Validated, in Delivery Process</h2>";
            echo "<p>Empty<p>";
            echo "</div>";
        }

        if (!empty($commande_3)) {
            afficherCommandes($userId, $commande_3, "Delivered Order", $livreurModel);
        } else {
            echo "<div class='empty-message'>";
            echo "<h2>Delivered Order</h2>";
            echo "<p>Empty<p>";
            echo "</div>";
        }
        ?>

    </main>
    <?php include_footer_client(); ?>
</body>

</html>

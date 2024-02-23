<?php
include_once '../view/includes.php';

require_once '../Models/utilisateurModel.php';
require_once '../Models/commandeModel.php';
require_once '../Models/livreurModel.php';
require_once '../Models/ordreModel.php';
require_once("../Models/pieceModel.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
    <link rel="stylesheet" href="../styles/siteLego.css">
</head>
<body id="ProfilPage">
    <div class="bandeau"></div>
    
    <h1>All Orders</h1>
    <?php include_header_admin(); ?>

    <div class='profil'>
        <main>

        <?php
            function afficherCommandesAdmin($commandes, $titre, $livreurModel) {
                if (!empty($commandes)) {
                    echo "<h2>$titre</h2>";
                    foreach ($commandes as $commande) {
                        $idCommande = $commande['id'];
                        $total = $commande['total'];
                        $userId = $commande['id_utilisateur'];

                        $userModel = new UserModel();
                        $user = $userModel->get_user_by_id($userId);

                        
                        // Vérifie si la clé "id_livreur" existe dans le tableau $commande
                        $idLivreur = isset($commande['id_livreur']) ? $livreurModel->get_name($commande['id_livreur']) : "Non spécifié";
                        
                        echo "<div class='user_info_container'>";
                        echo "<p> Order Number: $idCommande</p>";
                        echo "<p> Name: " . $user['name'] . "</p>";
                        echo "<p> Delivery Type: " . $idLivreur . "</p>";
                        echo "<p>Total: $total €";

                        echo "<form method='post' action='../Controllers/commandesPageController.php'>";

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
                        
                            // Output hidden inputs for each piece info
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

                    // Ajoutez le bouton "Accept" uniquement pour les commandes en statut 1
                    if ($titre == "Order in Validation Process") {
                        echo "<button type='submit' name='download_button_admin' class='download_button' placeholder='download_button'>Download</button>";
                        echo "<button type='submit' name='accept_button' class='accept_button' placeholder='accept_button'>Accept</button>";
                    } else {
                        echo "<button type='submit' name='download_button_admin' class='download_button' placeholder='download_button'>Download</button>";
                    }
                        echo "</form>";

                        echo "</div>";
                    }
                } else {
                    echo "<div class='empty-message'>";
                    echo "<h2>$titre</h2>";
                    echo "<p>Empty<p>";
                    echo "</div>";
                }
            }

            $commandeModel = new CommandeModel();
            $livreurModel = new LivreurModel(); 

            // Récupérer toutes les commandes
            $commande_0 = $commandeModel->get_all_commandes(0); /* commande dans le panier */
            $commande_1 = $commandeModel->get_all_commandes(1); /* commande faite ; en cours de validation */ 
            $commande_2 = $commandeModel->get_all_commandes(2); /* commande validé */
            $commande_3 = $commandeModel->get_all_commandes(3); /* commande livré */

            afficherCommandesAdmin($commande_0, "Order in Cart", $livreurModel);
            afficherCommandesAdmin($commande_1, "Order in Validation Process", $livreurModel);
            afficherCommandesAdmin($commande_2, "Order Validated, in Delivery Process", $livreurModel);
            afficherCommandesAdmin($commande_3, "Delivered Order", $livreurModel);
        ?>

        </main>
    </div>

    <?php include_footer_admin(); ?>
</body>
</html>

    <?php
    include_once '../view/includes.php';

    require_once '../Models/utilisateurModel.php';
    require_once '../Models/commandeModel.php';
    require_once '../Models/livreurModel.php';

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

        <div class='profil'>
        <main>
            <?php
                $userModel = new UserModel();

                session_start();

                if(isset($_SESSION['id'])){
                    $userId = $_SESSION['id'];

                    $user = $userModel->get_user_by_id($userId);
                    
                        echo "<div class = user_info_container>";
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
                        echo "<button type='submit' name='change_button' class='change_button' placeholder='change_button'>Change informations</button>";
                        echo "</form>";
                }
                else{
                    echo "<div class = user_info_container>";
                    echo "Connect yourself";
                    echo "</div>";
                }
            ?>


        <hr> <!-- Ligne de séparation -->

        <?php

            function afficherCommandes($commandes, $titre, $livreurModel) {
                if (!empty($commandes)) {
                    echo "<h2>$titre</h2>";
                    foreach ($commandes as $commande) {
                        $idCommande = $commande['id'];
                        $total = $commande['total'];
                        
                        // Vérifie si la clé "id_livreur" existe dans le tableau $commande
                        $idLivreur = isset($commande['id_livreur']) ? $livreurModel->get_name($commande['id_livreur']) : "Non spécifié";
                        
                        echo "<div class='user_info_container'>";
                        echo "<p>ID Commande: $idCommande</p>";
                        echo "<p>Nom Livreur: " . $idLivreur . "</p>";
                        echo "<p>Total: $total €";

                        echo "<form method='post' action='../Controllers/profilController.php'>";
                        echo "<button type='submit' name='downlaod_button' class='downlaod_button' placeholder='downlaod_button'>Download</button>";
                        echo "</form>";

                        echo "</div>";
                    }
                } else {
                    echo "<h2>$titre</h2>";
                    echo "<p>Aucune commande dans cette catégorie</p>";
                }
            }

            $commandeModel = new CommandeModel();
            $livreurModel = new LivreurModel(); 

            $commande_0 = $commandeModel->get_commande($userId, 0); /* commande dans le panier */
            $commande_1 = $commandeModel->get_commande($userId, 1); /* commande faite ; en cours de validation */ 
            $commande_2 = $commandeModel->get_commande($userId, 2); /* commande validé */
            $commande_3 = $commandeModel->get_commande($userId, 3); /* commande livré */            

            if (!empty($commande_0)) {
                afficherCommandes($commande_0, "Order in Cart", $livreurModel);
            }
            else {
                echo "<div class='empty-message'>";
                echo "<h2>Order in Cart</h2>";
                echo "<p>Empty<p>";
                echo "</div>";
            }
            
            if (!empty($commande_1)) {
                afficherCommandes($commande_1, "Order in Validation Process", $livreurModel);
            }
            else {
                echo "<div class='empty-message'>";
                echo "<h2>Order in Validation Process</h2>";
                echo "<p>Empty<p>";
                echo "</div>";
            }
            
            if (!empty($commande_2)) {
                afficherCommandes($commande_2, "Order Validated, in Delivery Process", $livreurModel);
            }
            else {
                echo "<div class='empty-message'>";
                echo "<h2>Order Validated, in Delivery Process</h2>";
                echo "<p>Empty<p>";
                echo "</div>";
            }
            
            if (!empty($commande_3)) {
                afficherCommandes($commande_3, "Delivered Order", $livreurModel);
            }
            else {
                echo "<div class='empty-message'>";
                echo "<h2>Delivered Order</h2>";
                echo "<p>Empty<p>";
                echo "</div>";
            }
            
                            
            
            /*
                $commandeModel = new CommandeModel();

                $commande_0 = $commandeModel->get_commande($userId, 0); /* commande dans le panier 
                $commande_1 = $commandeModel->get_commande($userId, 1); /* commande faite ; en cours de validation 
                $commande_2 = $commandeModel->get_commande($userId, 2); /* commande validé 
                $commande_3 = $commandeModel->get_commande($userId, 3); /* commande livré 


                echo "<h2> Commande dans le panier </h2>"


                echo "<h2> Commande en cours de validation </h2>"
                echo "<h2> Commande validée en cours de livraison </h2>"
                echo "<h2> Commande livrée </h2>"

                */

                ?>

        </main>
        <div>

        <?php include_footer_client(); ?>
    </body>
    </html>

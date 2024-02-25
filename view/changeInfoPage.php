<?php
include_once '../view/includes.php';

require_once '../Models/utilisateurModel.php';
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
            // if an error happened
            if (isset($something_to_say)) {
                echo "<div class='something_to_say'>";
                echo "<h2> $something_to_say </h2>";
                echo "</div>";
            }
            ?>

            <div class="section">
                <h2>Profil</h2>
                <form method="post" action="../Controllers/infoUserChangeController.php">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="number">Phone number:</label>
                        <input type="text" id="number" name="number">
                    </div>
                    <div class="form-group">
                        <label for="mdp">Password</label>
                        <input type="text" id="mdp" name="mdp">
                    </div>
                
                    <!-- Section Address -->
                    <div class="section">
                        <h2>Address</h2>
                        <div class="form-group">
                            <label for="address">Address:</label>
                            <input type="text" id="address" name="address">
                        </div>
                        <div class="form-group">
                            <label for="postalCode">Postal Code:</label>
                            <input type="text" id="postalCode" name="postalCode">
                        </div>
                        <div class="form-group">
                            <label for="country">Country:</label>
                            <input type="text" id="country" name="country">
                        </div>
                        <div class="form-group">
                            <label for="specification">Specification:</label>
                            <input type="text" id="specification" name="specification">
                        </div>
                    </div>

                    <button type="submit" name="change_button" class="change_button">Confirm change</button>
                </form>
            </div>
        </main>
    </div>

    <?php include_footer_client(); ?>
</body>
</html>

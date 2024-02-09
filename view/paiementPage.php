<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation de Commande</title>
    <link rel="stylesheet" href="../styles/siteLego.css">
</head>
<body id="ValidationPaiement">
    <div class="bandeau"></div>

    <!-- Début du bandeau de navigation -->

    <h1>Order validation</h1>
    <div class="bandeau"></div>

    <!-- logo / redirection catalogue -->
    <div class="logo">
        <form method="post" action="../Controllers/navOngletClient.php">
            <button type="submit" name="logoButton" class="logo">
                <img src="../figs/LegoLogo.png" alt="Logo" width="75" height="75" class="logo">
            </button>
        </form>
    </div>

    <!-- redirection profil -->
    <button id="profilButton">Profil</button>
    <img src="../figs/Profil.png" alt="Image de profil" id="profilImage">

    <!--like-->
    <button id="likeButton">Like</button>
    <img src="../figs/Like.JPG" alt="Image de like" id="likeImage">

    <!-- redirection Panier -->
    <form method="post" action="../Controllers/navOngletClient.php">
        <button type="submit" name="panierButton" id="panier" style="border: none; background: none; padding: 0; margin: 0; cursor: pointer;">
            <img src="../figs/Panier.JPG" alt="Image du panier" id="panierImage">
        </button>
    </form>

    <!-- logout -->
    <form id=logout method="post" action="../Controllers/loginController.php">
        <button type="submit" name="logoutButton" id="logout" style="border: none; background: none; padding: 0; margin: 0; cursor: pointer;">
            <img src="../figs/logout.PNG" alt="Image du logout" id="logoutImage">
        </button><br><br>
    </form>

    <!-- Fin du bandeau -->

    </div>

    <div class="backgroundBlur"></div>
    <div class="container">
        
        <!-- Section Address -->
        <div class="section">
            <h2>Address</h2>
            <form>
                <div class="form-group">
                    <label for="address-number">Number:</label>
                    <input type="text" id="address-number" name="address-number">
                </div>
                <div class="form-group">
                    <label for="address-line">Address:</label>
                    <input type="text" id="address-line" name="address-line">
                </div>
                <div class="form-group">
                    <label for="address-spec">Specification:</label>
                    <input type="text" id="address-spec" name="address-spec">
                </div>
                <div class="form-group">
                    <label for="postal-code">Postal Code:</label>
                    <input type="text" id="postal-code" name="postal-code">
                </div>
                <div class="form-group">
                    <label for="country">Country:</label>
                    <input type="text" id="country" name="country">
                </div>
            </form>
        </div>
        
        <!-- Section Buy -->
        <div class="section">
            <h2>Buy</h2>
            <form>
                <div class="form-group">
                    <label for="card-type">Type of Card:</label>
                    <select id="card-type" name="card-type">
                        <option value="mastercard">Mastercard</option>
                        <option value="visa">Visa</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="card-number">Card Number:</label>
                    <input type="text" id="card-number" name="card-number">
                </div>
                <div class="form-group">
                    <label for="card-name">Name on Card:</label>
                    <input type="text" id="card-name" name="card-name">
                </div>
                <div class="form-group">
                    <label for="card-cvv">CVV:</label>
                    <input type="text" id="card-cvv" name="card-cvv">
                </div>
                <div class="form-group">
                    <label for="card-expiry">Expiry Date:</label>
                    <input type="text" id="card-expiry" name="card-expiry">
                </div>
            </form>
        </div>
        
        <!-- Section Delivery -->
        <div class="section">
            <h2>Delivery</h2>
            <form>
                <div class="form-group">
                    <label for="delivery-method">Select Delivery Method:</label>
                    <label for="delivery-post" class="delivery-option">
                    <input type="radio" id="delivery-post" name="delivery-method" value="post">
                    <label for="delivery-post">
                    <img src="../figs/laposte.JPG" alt="logolaposte" id="logolaposte">
                    </label>
                    <input type="radio" id="delivery-dhl" name="delivery-method" value="dhl">
                    <label for="delivery-dhl">
                    <img  src="../figs/Dhl.JPG" alt="logoDHL" id="logoDHL">
                    </label>
                    <input type="radio" id="delivery-dpd" name="delivery-method" value="dpd">
                    <label for="delivery-dpd">
                    <img src="../figs/DPD.JPG" alt="logoDPD" id="logoDPD">
                    </label>
                </div>
            </form>
        </div>
        
        <!-- Button to submit the form -->
        <button class="submit-btn">Submit Order</button>
    </div>
</body>
</html>

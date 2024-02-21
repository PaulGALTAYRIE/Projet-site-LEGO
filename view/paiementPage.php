<?php
include_once '../view/includes.php';
?>

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

    <h1>Order validation</h1>
    <?php include_header_client(); ?>

    </div>

    <div class="backgroundBlur"></div>
    <div class="container">
    <main>
        
        <!-- Section Profil -->
        <div class="section">
            <h2>Profil</h2>
            <form method="post" action="../Controllers/paiementController">
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
        
        <!-- Section Buy -->
        <div class="section">
            <h2>Buy</h2>
                <div class="form-group">
                    <label for="cardType">Type of Card:</label>
                    <select id="cardType" name="cardType">
                        <option value="mastercard">Mastercard</option>
                        <option value="visa">Visa</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="cardName">Name on Card:</label>
                    <input type="text" id="cardName" name="cardName">
                </div>
                <div class="form-group">
                    <label for="cardNumber">Card Number:</label>
                    <input type="text" id="cardNumber" name="cardNumber">
                </div>
                <div class="form-group">
                    <label for="cardCVV">CVV:</label>
                    <input type="text" id="cardCVV" name="cardCVV">
                </div>
                <div class="form-group">
                    <label for="cardExpiry">Expiry Date:</label>
                    <input type="text" id="cardExpiry" name="cardExpiry">
                </div>
        </div>
        
        <!-- Section Delivery -->
        <div class="section">
            <h2>Delivery</h2>
                <div class="form-group">
                    <label for="delivery" class="delivery-option">

                    <input type="radio" name="delivery" value="post">
                    <label for="delivery_post">
                    <img src="../figs/laposte.JPG" alt="logolaposte" id="logolaposte">
                    </label>

                    <input type="radio" name="delivery" value="dhl">
                    <label for="delivery_dhl">
                    <img  src="../figs/Dhl.JPG" alt="logoDHL" id="logoDHL">
                    </label>

                    <input type="radio" name="delivery" value="dpd">
                    <label for="delivery_dpd">
                    <img src="../figs/DPD.JPG" alt="logoDPD" id="logoDPD">
                    </label>
                </div>
        </div>
        
        <!-- Button to submit the form -->
        <button class="submit-btn">Submit Order</button>
        </form>

    </main>
    </div>
    
    <?php include_footer_client(); ?>
</body>
</html>

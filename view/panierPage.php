<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panier</title>
    <link rel="stylesheet" href="../styles/siteLego.css">
</head>
<body>
    <div class="Panier">
        <h1>Panier</h1>
        <div class="bandeau"></div>
        <button id="profilButton">Profil</button>
        <img src="../figs/Profil.png" alt="Image de profil" id="profilImage">
        
        <form method="post" action="../Controllers/navOngletClient.php">
        <label><b>panierImage</b></label><br>
        <button type="submit" name="panierButton" id="panier" style="border: none; background: none; padding: 0; margin: 0; cursor: pointer;">
            <img src="../figs/Panier.JPG" alt="Image du panier" id="panierImage">
        </button><br><br>
        </form>
        
        <!--
        <button id="panierButton" action="re">Panier</button>
        <img src="../figs/Panier.JPG" alt="Image du panier" id="panierImage">
        -->

        <button id="likeButton">Like</button>
        <img src="../figs/Like.JPG" alt="Image de like" id="likeImage">

        <div class="logo">
        <form method="post" action="../Controllers/navOngletClient.php">
            <button type="submit" name="logoButton" class="logo">
                <img src="../figs/LegoLogo.png" alt="Logo" width="75" height="75" class="logo">
            </button>
        </form>
        </div>

        <div class="backgroundBlur"></div>
        <div class="cart">
            <div class="item">
                <img src="https://via.placeholder.com/100" alt="Product Image">
                <div class="item-details">
                    <h2>Product Name</h2>
                    <p>Description of the product.</p>
                    <p>Price: $10.00</p>
                </div>
                <button class="remove-btn">Remove</button>
            </div>
            <!-- Add more items here if needed -->
        </div>
        <div class="total">
            <p>Total: $0.00</p>

        <form method= "post" action="../Controllers/navOngletClient.php">
            <button type="submit" name="checkoutButton">Checkout</button>
        </form>

        <!--
            <button class="checkout-btn">Checkout</button>
        -->

        </div>
    </div>
</body>
</html>

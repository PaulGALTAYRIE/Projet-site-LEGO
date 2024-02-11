<?php include_once '../view/includes.php'; ?>

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
        <?php include_header_client(); ?>

        <main>
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

                <form method="post" action="../Controllers/navOngletClient.php">
                    <button type="submit" name="checkoutButton">Checkout</button>
                </form>
            </div>
        </main>

    </div>

</body>
<?php include_footer_client(); ?>

</html>

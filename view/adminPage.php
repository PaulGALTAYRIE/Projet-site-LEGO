<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin page</title>
    <link rel="stylesheet" href="../styles/siteLego.css">
</head>
<body id="catalogue">
    <h1>Administrateur</h1>
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
    <button id="panierButton">Panier</button>
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


</body>
</html>

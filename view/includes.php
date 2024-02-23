<?php

    function include_header_client() {
        ?>
        <header>
            <div class="bandeau"></div>
            <!-- logo / redirection catalogue -->
            <div class="logo">
                <form method="post" action="../Controllers/navOngletClient.php">
                    <button type="submit" name="logoButton" class="logoButton">
                        <img src="../figs/LegoLogo.png" alt="Logo" width="75" height="75" class="logoImage">
                    </button>
                </form>
            </div>

            <!-- redirection catalogue -->
                <form method="post" action="../Controllers/navOngletClient.php">
                    <button type="submit" name="catalogueButton" id="catalogueButton" style="border: none; background: none; padding: 0; margin: 0; cursor: pointer;">
                        <img src="../figs/catalogue.png" alt="catalogue" id="catalogueImage">
                        <figcaption>Catalogue</figcaption>
                    </button>
                </form>

            <!-- redirection profil -->
            <form method="post" action="../Controllers/navOngletClient.php">
                <button type="submit" name="profilButton" id="profil" style="border: none; background: none; padding: 0; margin: 0; cursor: pointer;">
                    <img src="../figs/Profil.png" alt="Image de profil" id="profilImage">
                    <figcaption>Profil</figcaption>
                </button>
            </form>    
            
            <!-- redirection Panier -->
            <form method="post" action="../Controllers/navOngletClient.php">
                <button type="submit" name="panierButton" id="panier" style="border: none; background: none; padding: 0; margin: 0; cursor: pointer;">
                    <img src="../figs/Panier.JPG" alt="Image du panier" id="panierImage">
                    <figcaption>Cart</figcaption>
                </button>
            </form>

            <!-- logout -->
            <form id=logout method="post" action="../Controllers/loginController.php">
                <button type="submit" name="logoutButton" id="logout" style="border: none; background: none; padding: 0; margin: 0; cursor: pointer;">
                    <img src="../figs/logout.PNG" alt="Image du logout" id="logoutImage">
                    <figcaption>Logout</figcaption>
                </button><br><br>
            </form>
        </header>
        <?php
    }


    function include_footer_client() {
        ?>
        <footer>
            <div class="footerLeft">Copyright! ©️LEGO</div>
            <div class="footerCenter">made by: FVKP</div>
            <div class="footerRight"><a href="mailto:contact@Lego.com" class="footerContact-link">Contact</a></div>
        </footer>
        <?php
    }


    function include_error_message($message) {
        echo "<p class='error_message'>" . $message . "</p>";
    }

    function include_header_admin() {
        ?>
        <header>
            <div class="bandeauAdmin"></div>
            <!-- logo / redirection commandes -->
            <div class="logo">
                <form method="post" action="../Controllers/navOngletClient.php">
                    <button type="submit" name="logoAdmin" class="logoButton">
                        <img src="../figs/LegoLogo.png" alt="Logo" width="75" height="75" class="logoImage">
                    </button>
                </form>
            </div>

            <!-- redirection stocks -->
            <form method="post" action="../Controllers/navOngletClient.php">
                <button type="submit" name="stocksButton" id="catalogueButton" style="border: none; background: none; padding: 0; margin: 0; cursor: pointer;">
                        <img src="../figs/catalogueAdmin.png" alt="catalogue" id="catalogueImage">
                    </button>
                </form>


            <!-- redirection profil admin -->
            <form method="post" action="../Controllers/navOngletClient.php">
                <button type="submit" name="profilAdminButton" id="profil" style="border: none; background: none; padding: 0; margin: 0; cursor: pointer;">
                    <img src="../figs/ProfilAdmin.png" alt="Image de profil" id="profilImage">
                </button>
            </form>    
            
            <!-- redirection commandes -->
            <form method="post" action="../Controllers/navOngletClient.php">
                <button type="submit" name="commandesButton" id="panier" style="border: none; background: none; padding: 0; margin: 0; cursor: pointer;">
                    <img src="../figs/Colis.PNG" alt="Image du panier" id="panierImage">
                </button>
            </form>

            <!-- logout -->
            <form id="logout" method="post" action="../Controllers/loginController.php">
                <button type="submit" name="logoutButton" style="border: none; background: none; padding: 0; margin: 0; cursor: pointer;">
                    <img src="../figs/logoutAdmin.PNG" alt="Image du logout" id="logoutImage">
                    <figcaption>Logout</figcaption>
                </button><br><br>
            </form>

        </header>
        <?php
    }

    function include_footer_admin() {
        ?>
        <footer class=admin>
            <div class="footerLeft">Copyright! ©️LEGO</div>
            <div class="footerCenter">made by: FVKP</div>
            <div class="footerRight"><a href="mailto:contact@Lego.com" class="footerContact-link">Contact</a></div>
        </footer>
        <?php
    }
    
?>
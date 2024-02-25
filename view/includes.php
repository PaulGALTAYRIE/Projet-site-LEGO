<?php

function include_header_client() {
    ?>
    <header>
        <div class="bandeau"></div>
        <!-- logo / redirection catalogue -->
        <div class="logo">
            <form method="post" action="../Controllers/navOngletClient.php">
                <figure>
                    <button type="submit" name="logoButton" class="logoButton">
                        <img src="../figs/LegoLogo.png" alt="Logo" width="75" height="75" class="logoImage" id="logoImage">
                        <span class="client">Client</span>
                    </button>
                </figure>
            </form>
        </div>

        <!-- redirection catalogue -->
        <form method="post" action="../Controllers/navOngletClient.php">
            <figure>
                <button type="submit" name="catalogueButton" id="catalogueButton" style="border: none; background: none; padding: 0; margin: 0; cursor: pointer;">
                    <img src="../figs/catalogue.png" alt="catalogue" id="catalogueImage">
                </button>
            </figure>
        </form>

        <!-- redirection profil -->
        <form method="post" action="../Controllers/navOngletClient.php">
            <figure>
                <button type="submit" name="profilButton" id="profil" style="border: none; background: none; padding: 0; margin: 0; cursor: pointer;">
                    <img src="../figs/Profil.png" alt="Image de profil" id="profilImage">
                </button>
            </figure>
        </form>

        <!-- redirection Panier -->
        <form method="post" action="../Controllers/navOngletClient.php">
            <figure>
                <button type="submit" name="panierButton" id="panier" style="border: none; background: none; padding: 0; margin: 0; cursor: pointer;">
                    <img src="../figs/Panier.png" alt="Image du panier" id="panierImage">
                </button>
            </figure>
        </form>

        <!-- logout -->
        <form method="post" action="../Controllers/loginController.php">
            <figure>
                <button type="submit" name="logoutButton" id="logout" style="border: none; background: none; padding: 0; margin: 0; cursor: pointer;">
                    <img src="../figs/logout.png" alt="Image du logout" id="logoutImage">
                </button>
            </figure>
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
        <!-- logo / redirection commandes Admin -->
        <div class="logo">
            <form method="post" action="../Controllers/navOngletClient.php">
                <figure>
                    <button type="submit" name="logoAdmin" class="logoButton">
                        <img src="../figs/LegoLogo.png" alt="Logo" width="75" height="75" class="logoImage">
                        <span class="adminLogo">Administrator</span>
                    </button>
                </figure>
            </form>
        </div>

        <!-- redirection stocks Admin -->
        <form method="post" action="../Controllers/navOngletClient.php">
            <figure>
                <button type="submit" name="stocksButton" id="stocksButton" style="border: none; background: none; padding: 0; margin: 0; cursor: pointer;">
                        <img src="../figs/catalogueAdmin.png" alt="catalogue" id="stocksImage">
                    </button>
                </figure>
        </form>

        <!-- redirection profil admin -->
        <form method="post" action="../Controllers/navOngletClient.php">
            <figure>
                <button type="submit" name="profilAdminButton" id="profil" style="border: none; background: none; padding: 0; margin: 0; cursor: pointer;">
                    <img src="../figs/ProfilAdmin.png" alt="Image de profil" id="profilAdminImage">
                </button>
            </figure>
        </form>

        <!-- redirection commandesAdmin -->
        <form method="post" action="../Controllers/navOngletClient.php">
            <figure>
                <button type="submit" name="commandesAdminButton" id="panier" style="border: none; background: none; padding: 0; margin: 0; cursor: pointer;">
                    <img src="../figs/Colis.png" alt="Image du Colis" id="commandesAdminImage">
                </button>
            </figure>
        </form>

        <!-- logoutAdmin -->
        <form id="logout" method="post" action="../Controllers/loginController.php">
            <figure>
                <button type="submit" name="logoutButton" style="border: none; background: none; padding: 0; margin: 0; cursor: pointer;">
                    <img src="../figs/logoutAdmin.png" alt="Image du logout" id="logoutImage">
                </button>
            </figure>
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

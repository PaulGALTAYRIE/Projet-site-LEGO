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

                <form method="post" action="../Controllers/navOngletClient.php">
                    <button type="submit" name="catalogueButton" id="catalogueButton"style="border: none; background: none; padding: 0; margin: 0; cursor: pointer;">
                        <img src="../figs/catalogue.png" alt="catalogue" id="catalogueImage">
                    </button>
                </form>

            <!-- redirection profil -->
            <form method="post" action="../Controllers/navOngletClient.php">
                <button type="submit" name="profilButton" id="profil" style="border: none; background: none; padding: 0; margin: 0; cursor: pointer;">
                    <img src="../figs/Profil.png" alt="Image de profil" id="profilImage">
                </button>
            </form>    
            
            
            <!--like
            <button id="likeButton">Like</button>
            <img src="../figs/Like.JPG" alt="Image de like" id="likeImage">
            -->

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
    
?>
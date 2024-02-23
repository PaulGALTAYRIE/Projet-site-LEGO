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
        <?php include_header_admin(); ?>
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
                        echo "<button type='submit' name='change_button_admin' class='change_button_admin' placeholder='change_button'>Change informations</button>";
                        echo "</form>";
                }
                else{
                    echo "<div class = user_info_container>";
                    echo "Connect yourself";
                    echo "</div>";
                }
            ?>

        </main>
        <?php include_footer_admin(); ?>

</body>
</html>

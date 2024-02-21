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
            $userModel = new UserModel();

            session_start();
            $userId = $_SESSION['id'];

            $user = $userModel->get_user_by_id($userId);
            
            if ($user) {
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
            } else {
                echo "Pls connect Yourself";
            }

        ?>
    </main>
    <div>

    <?php include_footer_client(); ?>
</body>
</html>

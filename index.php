<?php
include_once 'view/includes.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="/tai/tai_frog/project/styles/siteLego.css">
</head>
<body id="login">
    <div class="backgroundBlur"></div>
    <img src="/tai/tai_frog/project/figs/LegoLogo.png" alt="Login Image logo lego" id="logo1" width="75" height="75">
    <div class="login">
        <main>
            <h2>Login Page</h2>

            <?php 
                // Si une erreur s'est produite
                if (isset($something_to_say)) {
                    print_r($something_to_say);
                }
            ?>

            <form id="loginForm" method="post" action="/tai/tai_frog/project/Controllers/loginController.php">
                <label for="name"><b>User Name</b></label><br>
                <input type="text" name="name" id="name" placeholder="username"><br><br>
                <label for="mdp"><b>Password</b></label><br>
                <input type="password" name="mdp" id="mdp" placeholder="password"><br><br>
                <button type="submit">Log in</button>
            </form>

            <h2 class='new'>New account</h2>
            <form method="post" action="/tai/tai_frog/project/Controllers/navOngletClient.php">
                <button type="submit" name="newAccountButton" id="newAccount">Sign in</button>
            </form>

            <p>Si vous voulez, vous pouvez créer votre propre compte (Admin pour avoir accès au site en tant qu'administrateur ou Client pour avoir accès au site en tant que client)</p>
            <p>Sinon, vous pouvez utiliser les comptes suivants :</p>
            <p> - Name : Admin ; Password : 1234 </p>
            <p> - Name : Client ; Password : 0000 </p>
        </main>
    </div>

    <?php include_footer_client(); ?>
</body>
</html>

<?php
include_once '../view/includes.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="../styles/siteLego.css">
</head>
<body id="login">
<div class="backgroundBlur"></div>
  <img src="../figs/LegoLogo.png" alt="Login Image" id="logo1" width="75" height="75">
    <div class="login">

    <main>

        <h2>Login Page</h2>

        <?php 
            // if an error happened
            if (isset($something_to_say)) {
                print_r($something_to_say);
            }
        ?>
        <form id="login" method="post" action="../Controllers/loginController.php">
            <label><b>User Name</b></label><br>
            <input type="text" name="name" id="name" placeholder="username"><br><br>
            <label><b>Password</b></label><br>
            <input type="password" name="mdp" id="mdp" placeholder="password"><br><br>
            <button type="submit">Submit</button>
            <br><br>
            <input type="checkbox" id="check">
            <span>Remember me</span><br><br>
            Forgot <a href="#">Password</a>
        </form>
        <h2>Créer un nouveau compte</h2>
        <form method="post" action="../Controllers/navOngletClient.php">
            <button type="submit" name="newAccountButton" id="newAccount" placeholder="newAccount">Nouveau compte</button>
        </form>
    </main>

    </div>
    
    <?php include_footer_client(); ?>
</body>
</html>
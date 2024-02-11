<?php
include_once '../view/includes.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>New account form</title>
    <link rel="stylesheet" type="text/css" href="../styles/siteLego.css">
</head>
<body id="nouveauCompte">
<div class="backgroundBlur"></div>
  <img src="../figs/LegoLogo.png" alt="Login Image" id="logo1" width="75" height="75">
    <div class="login">

    <main>

        <h2>Create a new profil</h2>

        <?php 
            // if an error happened
            if (isset($something_to_say)) {
                print_r($something_to_say);
            }
        ?>
        <form id="login" method="post" action="../Controllers/newAccountController.php">
            <label><b>User Name</b></label><br>
            <input type="text" name="name" id="name" placeholder="username"><br><br>
            <label><b>Password</b></label><br>
            <input type="password" name="mdp" id="mdp" placeholder="password"><br><br>

            <label><b>Email</b></label><br>
            <input type="text" name="email" id="email" placeholder="email"><br><br>
            <label><b><Nav></Nav>umber</b></label><br>            
            <input type="int" name="number" id="number" placeholder="number"><br><br>
            <label><b>Country</b></label><br>
            <input type="text" name="country" id="country" placeholder="country"><br><br>
            <label><b>Adress</b></label><br>
            <input type="text" name="adress" id="adress" placeholder="adress"><br><br>
            <label><b>Code postal</b></label><br> 
            <input type="int" name="code_postal" id="code_postal" placeholder="code_postal"><br><br>
            <label><b>Specification</b></label><br>   
            <input type="text" name="specification" id="specification" placeholder="specification"><br><br>


            <div class="section">
            <h2>Statut</h2>
            <form>
                <label>
                <input type="radio" name="userType" value="admin"> Administrateur
                </label>
                <label>
                <input type="radio" name="userType" value="client"> Client
                </label>
            </form>
        </div>

            <button type="submit">Submit</button>
            <br><br>
            <input type="checkbox" id="check">
            <span>Remember me</span><br><br>
            Forgot <a href="#">Password</a>

        </form>

    </main>

    </div>
    
    <?php include_footer_client(); ?>
</body>
</html>
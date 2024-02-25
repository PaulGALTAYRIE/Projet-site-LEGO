<?php
include_once '../view/includes.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New account form</title>
    <link rel="stylesheet" type="text/css" href="../styles/siteLego.css">
</head>
<body id="nouveauCompte">
    <div class="backgroundBlur"></div>
    <img src="../figs/LegoLogo.png" alt="Login Image" id="logo1" width="75" height="75">
    <div class="login">

        <main>

            <h2>Create a new profile</h2>

            <?php 
                // Si une erreur s'est produite
                if (isset($something_to_say)) {
                    print_r($something_to_say);
                }
            ?>
            <form id="loginNewProfile" method="post" action="../Controllers/newAccountController.php">
                <label><b>User Name</b></label><br>
                <input type="text" name="name" id="name" placeholder="username"><br><br>
                <label><b>Password</b></label><br>
                <input type="password" name="mdp" id="mdp" placeholder="password"><br><br>

                <label><b>Email</b></label><br>
                <input type="email" name="email" id="email" placeholder="email"><br><br>
                <label><b>Phone Number</b></label><br>            
                <input type="tel" name="number" id="number" placeholder="number"><br><br>
                <label><b>Country</b></label><br>
                <input type="text" name="country" id="country" placeholder="country"><br><br>
                <label><b>Address</b></label><br>
                <input type="text" name="address" id="address" placeholder="address"><br><br>
                <label><b>Postal Code</b></label><br> 
                <input type="text" name="code_postal" id="code_postal" placeholder="code_postal"><br><br>
                <label><b>Specification</b></label><br>   
                <input type="text" name="specification" id="specification" placeholder="specification"><br><br>
                <div class="sectionNew">
                    <h2>Status</h2>
                    <label>
                        <input type="radio" name="userType" value="admin"> Administrator
                    </label>
                    <label>
                        <input type="radio" name="userType" value="client"> Client
                    </label>
                </div>
                <button type="submit">Submit</button>
            </form>
        </main>
    </div>
    
    <?php include_footer_client(); ?>
</body>
</html>
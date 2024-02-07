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
        <h2>Login Page</h2><br>

        <?php 
            // if an error happened
            if (isset($something_to_say)) {
                include_error_message($something_to_say);
            }
        ?>

        <form id="login" method="get" action="../Controllers/loginController.php">
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

    </div>
</body>
</html>
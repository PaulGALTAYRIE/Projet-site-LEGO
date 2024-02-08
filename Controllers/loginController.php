<?php

    require_once("../Models/utilisateurModel.php");

    if (isset($_POST['name']) && isset($_POST['mdp'])) {

        // check if all fields have an input
        if (strlen($_POST['name']) > 0 && strlen($_POST['mdp']) > 0) {
            $userModel = new UserModel();

            $result = $userModel->check_login($_POST['name'], $_POST['mdp']);

            if (isset($result['name'])) {

                session_start();
                $_SESSION['name'] = $result['name'];
                $_SESSION['mdp'] = $result['mdp'];
            }
            else {

                $something_to_say = "Invalid login and/or password.";
            }
        }
        else {

            $something_to_say = "Missing login and/or password";
        }
        
    }

    /*
    if (isset($_POST['logout'])) {
        session_start();
        session_destroy();
    }
    */

    if (isset($_SESSION['name'])) {
        require_once("../view/cataloguePage.php");
    }
    else {
        require_once("../view/loginPage.php");
    }


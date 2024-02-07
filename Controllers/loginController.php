<?php

    require_once(__DIR__."Models/utilisateurModel.php");

    if (isset($_POST['name']) && isset($_POST['mdp'])) {

        // check if all fields have an input
        if (strlen($_POST['name']) > 0 && strlen($_POST['mdp']) > 0) {
            $userModel = new UserModel();

            $result = $userModel->check_login($_POST['name'], $_POST['mdp']);

            if (isset($result['name'])) {

                session_start();
                $_SESSION['firstname'] = $result['firstname'];
                $_SESSION['lastname'] = $result['lastname'];
            }
            else {

                $something_to_say = "Invalid login and/or password.";  
            }
        }
        else {

            $something_to_say = "Missing login and/or password";
        }
    }

    if (isset($_POST['logout'])) {
        session_start();
        session_destroy();
    }

    if (isset($_SESSION['firstname'])) {
        require_once(__DIR__."/view/catalogueLego.php");
    }
    else {
        require_once(__DIR__."/view/loginPage.php");
    }


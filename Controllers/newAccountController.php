<?php

    require_once("../Models/utilisateurModel.php");

    if (isset($_POST['name']) && isset($_POST['mdp']) && isset($_POST['email']) && isset($_POST['number']) && isset($_POST['country']) && isset($_POST['adress']) && isset($_POST['code_postal']) && isset($_POST['userType'])) {

        // check if all fields have an input
        if (strlen($_POST['name']) > 0 && strlen($_POST['mdp']) > 0 && strlen($_POST['email']) > 0 && strlen($_POST['number']) > 0 && strlen($_POST['country']) > 0 && strlen($_POST['adress']) > 0 && strlen($_POST['code_postal']) > 0 ) {
            $userModel = new UserModel();

            $result = $userModel->check_login($_POST['name'], $_POST['mdp']);

            if(isset($result['name'])) {
                $something_to_say = "You alrdeady have this account.";
                require_once("../view/loginPage.php");
            }

            else{
                session_start();
                $_SESSION['name'] = $_POST['name'];
                $_SESSION['mdp'] = $_POST['mdp'];
                $_SESSION['email'] = $_POST['email'];
                $_SESSION['number'] = $_POST['number'];
                $_SESSION['country'] = $_POST['country'];
                $_SESSION['adress'] = $_POST['adress'];
                $_SESSION['code_postal'] = $_POST['code_postal'];
                $_SESSION['specification'] = $_POST['specification'];

                if ($_POST['userType'] == "admin"){
                    $_SESSION['statut'] = 1;
                }
                else{
                    $_SESSION['statut'] = 0;
                }
            }
            $userModel->create_user($_POST['name'], $_POST['mdp'], $_POST['email'], $_POST['number'], $_POST['country'], $_POST['adress'], $_POST['code_postal'], $_SESSION['statut'], $_POST['specification']);
        }
        else {

            $something_to_say = "Missing Informations";
        }
    }

    
    if (isset($_POST['logout'])) {
        session_start();
        session_destroy();

        require("../view/loginPage.php");
    }
    

    if (isset($_SESSION['name'])) {
            require_once("../view/loginPage.php");
    }
    
    else {
        require_once("../view/nouveauComptePage.php");
    }


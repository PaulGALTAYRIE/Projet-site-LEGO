<?php
    /**
     * Example of a simple controller
     * It will call the model to get the data
     * and then decide which view to display (login form or welcome page)
     * 
     * @author: p.reuter
     * @date: Dec. 2023
     */

    
    // do all necessary includes first
    // __DIR__ allows you to use relative paths explicitly
    require_once("../Models/utilisateurModel.php");

    $userModel = new UserModel();

    $name = "Dieu";
    $mdp = "1234";
    $statut = "0";
    
    $result = $userModel->check_login($name, $mdp);
    print_r($result);


    $name = "Jesus";
    $mdp = "0000";
    $statut = "0";

    $result = $userModel->check_login($name, $mdp);
    print_r($result);


    $name = "Dieu";
    $mdp = "1ded23";
    $statut = "0";
    
    $result = $userModel->check_login($name, $mdp);
    print_r($result);

    $name = "donutt";
    $mdp = "1234";
    $statut = "1";
    
    $result = $userModel->check_login($name, $mdp);
    print_r($result);


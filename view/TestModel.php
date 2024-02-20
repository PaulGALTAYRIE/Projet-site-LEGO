<?php

    /* test model utilisateut */

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



    /* test piece model */

    require_once("../Models/pieceModel.php");

    $pieceModel = new PieceModel();

    $name = "Brick 2x3 blue";

    $result = $pieceModel->get_quantity_price($name);
    print_r($result);


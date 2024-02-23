<?php
    /* test model utilisateut */

    require_once("../Models/utilisateurModel.php");

    /*
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
    $stock = $result['quantity'];

    print_r($result);
    print_r($stock);


    

    /* test ordre model */
    /*

    require_once("../Models/ordreModel.php");

    $ordreModel = new OrdreModel();

    $id_commande = 5;

    $result = $ordreModel->get_ordre($id_commande);
    print_r($result);

    /* test commande model */
    /*
    require_once("../Models/commandeModel.php");

    $commandeModel = new CommandeModel();

    $id_utilisateur = 7;
    $statut = 0;

    $result = $commandeModel->get_commande($id_utilisateur, $statut);
    print_r($result);
    */
    



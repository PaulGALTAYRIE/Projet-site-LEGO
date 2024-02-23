<?php
    require_once("../Models/ordreModel.php");
    require_once("../Models/pieceModel.php");
    require_once("../Models/commandeModel.php");


    if (isset($_POST['remove_btn'])) {

        $ordreModel = new OrdreModel();
        $pieceModel = new PieceModel();
        $commandeModel = new CommandeModel();
    
        $ordreModel->remove_ordre($_POST['id_ordre']);
        $pieceModel->add_piece($_POST['quantity'], $_POST['pieceName']);
    
        $price = $_POST['quantity'] * $_POST['price'];
        $total = $commandeModel->get_total($_POST['commande'])['total'];
        $total = $total - $price;    
        $commandeModel->update_total($_POST['commande'], $total);
    
        header("Location: ../view/panierPage.php");
        exit();
    }
    
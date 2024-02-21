<?php
    require_once("../Models/ordreModel.php");
    require_once("../Models/pieceModel.php");


if (isset($_POST['remove_btn'])) {

    $ordreModel = new OrdreModel();
    $pieceModel = new PieceModel();

    $ordreModel->remove_ordre($_POST['id_ordre']);
    $pieceModel->add_piece($_POST['quantity'], $_POST['pieceName']);

    header("Location: ../view/panierPage.php");
    exit();
}
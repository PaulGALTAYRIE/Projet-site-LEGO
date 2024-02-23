<?php

require_once("../Models/pieceModel.php");

$pieceModel = new PieceModel();


session_start();

    if (!isset($_SESSION['id'])) {
        $something_to_say = "Connectez-vous";
        require_once("../view/stocksPage.php");
        exit();
    }

    if (is_numeric($_POST["quantity"])){

        if ($_POST["quantity"]>=0){
                $pieceModel->update_quantity($_POST["quantity"], $_POST["product_type"]);

                require_once("../view/stocksPage.php");
                exit();
            }
        else{
            $something_to_say = "You can't enter a negative number !";
            require_once("../view/stocksPage.php");
        }
    }
    else {
        $something_to_say = "Enter a number !";
        require_once("../view/stocksPage.php");
    }
?>


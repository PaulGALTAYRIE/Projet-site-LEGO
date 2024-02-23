<?php

require_once("../Models/ordreModel.php");
require_once("../Models/commandeModel.php");
require_once("../Models/pieceModel.php");

require_once("../Models/DBModel.php");

$commandeModel = new CommandeModel();
$ordreModel = new OrdreModel();
$pieceModel = new PieceModel();

$statut = 0; // 0 signifie que la commande n'a pas encore été effectué

session_start();

    if (!isset($_SESSION['id'])) {
        $something_to_say = "Connectez-vous";
        require_once("../view/cataloguePage.php");
        exit();
    }

    function createOrGetCommande($commandeModel, $user_id, $statut) {
        $existing_commandes = $commandeModel->get_commande($user_id, $statut);

        if (!empty($existing_commandes)) {
            return [
                'id' => $existing_commandes[0]['id'],
                'id_livreur' => $existing_commandes[0]['id_livreur']
            ];
        } else {
            $id_livreur = 1; // 1 signifie que le mode de livraison n'a pas encore été spécifié
            $commandeModel->create_commande($user_id, $id_livreur, $statut);
            return [
                'id' => $commandeModel->getLastInsertId(),
                'id_livreur' => $id_livreur
            ];
        }
    }

    $user_id = $_SESSION['id'];
    $statut = 0; // Statut initial
    $commande_info = createOrGetCommande($commandeModel, $user_id, $statut);

    $commande_id = $commande_info['id'];
    $id_livreur = $commande_info['id_livreur'];

    // Reste du code...
    $result = $commandeModel->get_commande($_SESSION['id'], $statut);
    $firstCommande = reset($result);
    $id_commande = $firstCommande['id'];



/**/

    $result = $pieceModel->get_quantity_price($_POST["product_type"]);
    $stock = $result['quantity'];
    $result = $pieceModel->get_id_piece($_POST["product_type"]);
    $id_piece = $result['id'];

        if (is_numeric($_POST["quantity"])){

            if ($_POST["quantity"]>0){
                if ($stock >= $_POST["quantity"]) {
                    $ordreModel->create_ordre($id_commande, $id_piece, $_POST["quantity"]);
                    $pieceModel->remove_piece($_POST["quantity"], $_POST["product_type"]);
                    require_once("../view/cataloguePage.php");
                    exit();
                }
                else{
                    $something_to_say = "Not enough sotcks !";
                    require_once("../view/cataloguePage.php");
                }
            }
            else{
                $something_to_say = "You can't enter a negative number !";
                require_once("../view/cataloguePage.php");
            }
        }
        else {
            $something_to_say = "Enter a number !";
            require_once("../view/cataloguePage.php");
        }
?>


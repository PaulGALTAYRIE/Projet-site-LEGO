<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once(__DIR__ . "/../Models/ordreModel.php");
require_once(__DIR__ . "/../Models/commandeModel.php");
require_once(__DIR__ . "/../Models/pieceModel.php");

require_once(__DIR__ . "/../Models/DBModel.php");

$commandeModel = new CommandeModel();
$ordreModel = new OrdreModel();
$pieceModel = new PieceModel();

$statut = 0; // 0 signifie que la commande n'a pas encore été effectué

session_start();

    if (!isset($_SESSION['id'])) {
        $something_to_say = "Connectez-vous";
        require_once(__DIR__ . "/../view/cataloguePage.php");
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
            $existing_commandes = $commandeModel->get_commande($user_id, $statut);
            return [
                'id' => $existing_commandes[0]['id'],
                'id_livreur' => $existing_commandes[0]['id_livreur']
            ];
        }
    }

    $user_id = $_SESSION['id'];
    $statut = 0; // Statut initial
    $commande_info = createOrGetCommande($commandeModel, $user_id, $statut);

    $commande_id = $commande_info['id'];
    $id_livreur = $commande_info['id_livreur'];

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

                    $priceData = $pieceModel->get_price($id_piece);
                    $price = $priceData['price'] ?? null;
                    
                    if ($price !== null) {
                        $price = $_POST["quantity"] * $price;
                        $total = $commandeModel->get_total($id_commande)['total'];
                        $total = $total + $price;
                        $commandeModel->update_total($id_commande, $total);
                    } else {
                        // Gérer le cas où le prix n'est pas défini
                        echo "Prix non disponible.";
                    }
                    echo "Je suis là";

                    require_once(__DIR__ . "/../view/cataloguePage.php");
                    exit();
                }
                else{
                    $something_to_say = "Not enough sotcks !";
                    require_once(__DIR__ . "/../view/cataloguePage.php");
                }
            }
            else{
                $something_to_say = "You can't enter a negative number !";
                require_once(__DIR__ . "/../view/cataloguePage.php");
            }
        }
        else {
            $something_to_say = "Enter a number !";
            require_once(__DIR__ . "/../view/cataloguePage.php");
        }
?>


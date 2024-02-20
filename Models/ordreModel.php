<?php

require_once("DBModel.php");

class OrdreModel extends DBmodel {

    function create_order(int $id_commande, int $id_piece, int $quantity) {

        $request = "INSERT INTO ordre(id_commande, id_piece, quantity) VALUES (:id_commande, :id_piece, :quantity)";
        $statement = $this->db->prepare($request);
        $statement->execute(
            [
                "id_commande" => $id_commande,
                "id_piece" => $id_piece,
                "quantity" => $quantity
            ]
            );
    }

}



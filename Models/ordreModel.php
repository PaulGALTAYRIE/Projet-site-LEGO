<?php

require_once("DBModel.php");

class OrdreModel extends DBmodel {

    function create_ordre(int $id_commande, int $id_piece, int $quantity) {

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

    function get_ordre(int $id_commande) {
        $result = [];

        $request = "SELECT id, id_piece, quantity FROM ordre WHERE id_commande = :id_commande";
        $statement = $this->db->prepare($request);
        $statement->execute(["id_commande" => $id_commande]);  // Correction ici
    
        $entries = $statement->fetchAll();
        
        foreach ($entries as $entry) {
            $result[] = [
                "id" => $entry['id'],
                "id_piece" => $entry['id_piece'],
                "quantity" => $entry['quantity']
            ];
        }
        
        return $result;
    }

    function remove_ordre(int $id_ordre) {

        $request = "DELETE FROM ordre WHERE id = :id_ordre";
        $statement = $this->db->prepare($request);
        $statement->execute([
            "id_ordre" => $id_ordre,
        ]);
    }
}


<?php

require_once("DBModel.php");

class PieceModel extends DBmodel {

    function get_quantity_price(string $name) {

        $result = [];

        $request = "SELECT quantity, price FROM piece WHERE name=:name";
        $statement = $this->db->prepare($request);
        $statement->execute([
            "name" => $name,
        ]);
        $entries = $statement->fetchAll();
        if (count($entries) == 1) {
            $result["quantity"] = $entries[0]['quantity'];
            $result["price"] = $entries[0]['price'];

        }
        return $result;
    }
    function remove_piece(int $quantity, string $name) {

        $request = "UPDATE piece SET quantity = quantity - :quantity WHERE name = :name";
        $statement = $this->db->prepare($request);
        $statement->execute([
            "quantity" => $quantity,
            "name" => $name,
        ]);
    }

    function get_id_piece(string $name) {
        $result = [];

        $request = "SELECT id FROM piece WHERE name = :name";
        $statement = $this->db->prepare($request);
        $statement->execute([
            "name" => $name,
        ]);
        $entries = $statement->fetchAll();
        
        if (count($entries) == 1) {
            $result["id"] = $entries[0]['id'];
        }
        
        return $result;
    }
}



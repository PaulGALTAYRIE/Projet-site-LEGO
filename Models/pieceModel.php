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
}



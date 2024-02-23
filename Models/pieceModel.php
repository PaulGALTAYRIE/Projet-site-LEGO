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

    function get_name(string $id) {

        $result = [];

        $request = "SELECT name FROM piece WHERE id=:id";
        $statement = $this->db->prepare($request);
        $statement->execute([
            "id" => $id,
        ]);
        $entries = $statement->fetchAll();
        if (count($entries) == 1) {
            $result["name"] = $entries[0]['name'];
        }
        return $result;
    }

    function get_format(string $id) {

        $result = [];

        $request = "SELECT format FROM piece WHERE id=:id";
        $statement = $this->db->prepare($request);
        $statement->execute([
            "id" => $id,
        ]);
        $entries = $statement->fetchAll();
        if (count($entries) == 1) {
            $result["format"] = $entries[0]['format'];
        }
        return $result;
    }

    function get_color(string $id) {

        $result = [];

        $request = "SELECT color FROM piece WHERE id=:id";
        $statement = $this->db->prepare($request);
        $statement->execute([
            "id" => $id,
        ]);
        $entries = $statement->fetchAll();
        if (count($entries) == 1) {
            $result["color"] = $entries[0]['color'];
        }
        return $result;
    }

    function get_price(int $id) {

        $result = [];

        $request = "SELECT price FROM piece WHERE id=:id";
        $statement = $this->db->prepare($request);
        $statement->execute([
            "id" => $id,
        ]);
        $entries = $statement->fetchAll();
        if (count($entries) == 1) {
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
    function add_piece(int $quantity, string $name) {

        $request = "UPDATE piece SET quantity = quantity + :quantity WHERE name = :name";
        $statement = $this->db->prepare($request);
        $statement->execute([
            "quantity" => $quantity,
            "name" => $name,
        ]);
    }
    function update_quantity(int $quantity, string $name) {

        $request = "UPDATE piece SET quantity = :quantity WHERE name = :name";
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



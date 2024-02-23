<?php

require_once("DBModel.php");

class LivreurModel extends DBModel {

    function get_id(string $name){
        $result = [];

        $request = "SELECT id FROM livreur WHERE name=:name";
        $statement = $this->db->prepare($request);
        $statement->execute([
            "name" => $name,
        ]);
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result['id'] ?? null;
    }

    function get_name(string $id){
        $result = [];

        $request = "SELECT name FROM livreur WHERE id=:id";
        $statement = $this->db->prepare($request);
        $statement->execute([
            "id" => $id,
        ]);
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result['name'] ?? null;
    }
}

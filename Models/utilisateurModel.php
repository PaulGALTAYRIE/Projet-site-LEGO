<?php

require_once("DBModel.php");

class UserModel extends DBModel {


    function check_login(string $name, string $mdp) {
        $result = [];
        
        /*
        if (!$this->connected) {

            return $result;
        }
        */

        $request = "SELECT name, mdp, statut FROM utilisateur WHERE name=:name AND mdp=:mdp";
        $statement = $this->db->prepare($request);
        $statement->execute([
            "name" => $name,
            "mdp" => $mdp
        ]);
        $entries = $statement->fetchAll();
        if (count($entries) == 1) {
            $result["name"] = $entries[0]['name'];
            $result["mdp"] = $entries[0]['mdp'];
            $result["statut"] = $entries[0]['statut'];
        }
        return $result;
    }

    function create_user(string $name, string $mdp, string $email, int $number, string $coutry, string $adress, int $code_postal, string $statut ){
        $request = "IMPORT "




    }

}


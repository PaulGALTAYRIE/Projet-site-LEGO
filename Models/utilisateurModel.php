<?php

require_once("DBModel.php");

class UserModel extends DBModel {


    function check_login(string $name, string $mdp) {
        $result = [];
        
        $request = "SELECT id, name, mdp, statut FROM utilisateur WHERE name=:name AND mdp=:mdp";
        $statement = $this->db->prepare($request);
        $statement->execute([
            "name" => $name,
            "mdp" => $mdp
        ]);
        $entries = $statement->fetchAll();
        if (count($entries) == 1) {
            $result["id"] = $entries[0]['id'];
            $result["name"] = $entries[0]['name'];
            $result["mdp"] = $entries[0]['mdp'];
            $result["statut"] = $entries[0]['statut'];
        }
        return $result;
    }

    function create_user(string $name, string $mdp, string $email, int $number, string $country, string $adress, int $code_postal, int $statut, string $specification){
        $request = "INSERT INTO utilisateur(name, mdp, email, number, country, adresse, code_postal, statut, specification) VALUES (:name, :mdp, :email, :number, :country, :adresse, :code_postal, :statut, :specification)";
        $statement = $this->db->prepare($request);
        $statement->execute(
            [
                "name" => $name,
                "mdp" => $mdp,
                "email" => $email,
                "number" => $number,
                "country" => $country,
                "adresse" => $adress,
                "code_postal" => $code_postal,
                "statut" => $statut,
                "specification" => $specification,
            ]
        );
    }
    function update_user(int $id, string $name, string $email, int $number, string $country, string $adress, int $code_postal, string $specification){
        $request = "UPDATE utilisateur SET name = :name, email = :email, number = :number, country = :country, adresse = :adresse, code_postal = :code_postal, specification = :specification WHERE id = :id";
        $statement = $this->db->prepare($request);
        $statement->execute(
            [
                "id" => $id,
                "name" => $name,
                "email" => $email,
                "number" => $number,
                "country" => $country,
                "adresse" => $adress,
                "code_postal" => $code_postal,
                "specification" => $specification,
            ]
        );
    }
    function update_user_change(int $id, string $name, string $mdp, string $email, int $number, string $country, string $adress, int $code_postal, string $specification){
        $request = "UPDATE utilisateur SET name = :name, mdp = :mdp, email = :email, number = :number, country = :country, adresse = :adresse, code_postal = :code_postal, specification = :specification WHERE id = :id";
        $statement = $this->db->prepare($request);
        $statement->execute(
            [
                "id" => $id,
                "name" => $name,
                "mdp" => $mdp,
                "email" => $email,
                "number" => $number,
                "country" => $country,
                "adresse" => $adress,
                "code_postal" => $code_postal,
                "specification" => $specification,
            ]
        );
    }
    function get_user_by_id(int $id) {
        $request = "SELECT name, email, number, country, adresse, code_postal, specification FROM utilisateur WHERE id = :id";
        $statement = $this->db->prepare($request);
        $statement->execute([
            "id" => $id,
        ]);
        $entries = $statement->fetchAll();
        if (count($entries) == 1) {
            $result["name"] = $entries[0]['name'];
            $result["email"] = $entries[0]['email'];
            $result["number"] = $entries[0]['number'];
            $result["country"] = $entries[0]['country'];
            $result["adresse"] = $entries[0]['adresse'];
            $result["code_postal"] = $entries[0]['code_postal'];
            $result["specification"] = $entries[0]['specification'];
        }
        return $result;
    }
}
?>
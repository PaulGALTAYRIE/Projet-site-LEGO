<?php

require_once("DBModel.php");

class CommandeModel extends DBmodel {

    function create_commande(int $id_utilisateur, int $id_livreur, int $statut) {

        $request = "INSERT INTO commande (id_utilisateur, id_livreur, statut) VALUES (:id_utilisateur, :id_livreur, :statut)";
        $statement = $this->db->prepare($request);
        $statement->execute(
            [
                "id_utilisateur" => $id_utilisateur,
                "id_livreur" => $id_livreur,
                "statut" => $statut
            ]
            );
    }


    function get_commande(int $id_utilisateur, int $statut) {
        $result = [];

        $request = "SELECT id FROM commande WHERE id_utilisateur = :id_utilisateur AND statut = :statut";
        $statement = $this->db->prepare($request);
        $statement->execute([
            "id_utilisateur" => $id_utilisateur,
            "statut"=> $statut
        ]);
        $entries = $statement->fetchAll();
        if (count($entries) == 1) {
            $result["id"] = $entries[0]['id'];
        }
        return $result;
    }
}

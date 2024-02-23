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
    
        $request = "SELECT id, id_livreur, total FROM commande WHERE id_utilisateur = :id_utilisateur AND statut = :statut";
        $statement = $this->db->prepare($request);
        $statement->execute([
            "id_utilisateur" => $id_utilisateur,
            "statut"=> $statut
        ]);
        $entries = $statement->fetchAll(PDO::FETCH_ASSOC);
    
        foreach ($entries as $entry) {
            $result[] = [
                "id" => $entry['id'],
                "id_livreur" => $entry['id_livreur'], // Ajoutez l'id du livreur dans le tableau résultat
                "total" => $entry['total'], // Ajoutez l'id du livreur dans le tableau résultat
            ];
        }
    
        return $result;
    }
    

    function update_commande(int $id, int $statut, int $id_livreur) {
        $request = "UPDATE commande SET statut = :statut, id_livreur = :id_livreur WHERE id = :id";
        $statement = $this->db->prepare($request);
        $statement->execute([
            "id" => $id,
            "statut" => $statut,
            "id_livreur" => $id_livreur,
        ]);
    }

    function update_statut(int $id,  int $statut) {
        $request = "UPDATE commande SET statut = :statut WHERE id = :id";
        $statement = $this->db->prepare($request);
        $statement->execute([
            "id" => $id,
            "statut" => $statut,
        ]);
    }

    function update_total(int $id, float $total) {
        $request = "UPDATE commande SET total = :total WHERE id = :id";
        $statement = $this->db->prepare($request);
        $statement->execute([
            "id" => $id,
            "total" => $total,
        ]);
    }

    function get_total(int $id) {
        $request = "SELECT total FROM commande WHERE id = :id";
        $statement = $this->db->prepare($request);
        $statement->execute([
            "id" => $id,
        ]);
        $entries = $statement->fetchAll();
        
        if (count($entries) == 1) {
            $result["total"] = $entries[0]['total'];
        }
        
        return $result;
    }

    function get_all_commandes($statut) {
        $request = "SELECT * FROM commande WHERE statut = :statut";
        $statement = $this->db->prepare($request);
        $statement->execute([
            "statut" => $statut,
        ]);
        $entries = $statement->fetchAll();
    
        $result = []; // Initialisez $result comme un tableau vide
    
        foreach ($entries as $entry) {
            $result[] = [
                "id" => $entry['id'],
                "id_utilisateur" => $entry['id_utilisateur'],
                "id_livreur" => $entry['id_livreur'], // Ajoutez l'id du livreur dans le tableau résultat
                "total" => $entry['total'], // Ajoutez l'id du livreur dans le tableau résultat
            ];
        }
        return $result;
    }

}


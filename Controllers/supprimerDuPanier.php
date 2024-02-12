<?php
session_start();

// Vérifier si l'ID du produit à supprimer est passé en tant que POST
if (isset($_POST['id_produit']) && is_numeric($_POST['id_produit'])) {
    // Récupérer l'ID du produit à supprimer
    $id_produit = $_POST['id_produit'];

    // Vérifier si le produit existe dans le panier
    if (isset($_SESSION['panier'][$id_produit])) {
        // Si le produit existe, le supprimer du panier
        unset($_SESSION['panier'][$id_produit]);
    }

    // Rediriger l'utilisateur vers la page de panier après la suppression
    header('Location: ../view/panierPage.php');
    exit();
} else {
    // Rediriger l'utilisateur vers une page d'erreur si l'ID du produit n'est pas spécifié ou invalide
    header('Location: ../view/erreur.php');
    exit();
}
?>

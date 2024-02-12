<?php
session_start();

// Vérifier si l'ID du produit est passé dans l'URL
if (isset($_GET['id_produit']) && is_numeric($_GET['id_produit'])) {
    // Récupérer l'ID du produit depuis l'URL
    $id_produit = $_GET['id_produit'];

    // Ajouter le produit au panier
    // Vous pouvez utiliser la session pour stocker le panier
    if (!isset($_SESSION['panier'])) {
        $_SESSION['panier'] = array();
    }

    // Vérifier si le produit est déjà dans le panier
    if (isset($_SESSION['panier'][$id_produit])) {
        // Si le produit est déjà dans le panier, augmenter la quantité
        $_SESSION['panier'][$id_produit]++;
    } else {
        // Si le produit n'est pas dans le panier, l'ajouter avec une quantité de 1
        $_SESSION['panier'][$id_produit] = 1;
    }

    // Rediriger l'utilisateur vers la page de panier
    header('Location: ../view/panierPage.php');
    exit();
} else {
    // Rediriger l'utilisateur vers une page d'erreur si l'ID du produit n'est pas spécifié ou invalide
    header('Location: ../view/erreur.php');
    exit();
}
?>

<?php
session_start();

// Vérifier si l'ID du produit est passé dans l'URL
if (isset($_GET['id_produit'])) {
    $id_produit = $_GET['id_produit'];
    
    // Ajouter le produit au panier
    // Vous pouvez utiliser la session pour stocker le panier
    if (!isset($_SESSION['panier'])) {
        $_SESSION['panier'] = array();
    }
    // Vous pouvez utiliser l'ID du produit comme clé et la quantité comme valeur
    $_SESSION['panier'][$id_produit] = 1; // Par exemple, 1 indique la quantité

    // Rediriger l'utilisateur vers la page de panier ou une autre page
    header('Location: ../view/panierPage.php');
    exit();
} else {
    // Rediriger l'utilisateur vers une page d'erreur si l'ID du produit n'est pas spécifié
    header('Location: ../view/erreur.php');
    exit();
}
?>

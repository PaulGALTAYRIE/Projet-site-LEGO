<?php

require_once("../Models/utilisateurModel.php");
require_once("../Models/commandeModel.php");
require_once("../Models/livreurModel.php");



if(!isset($_POST['name']) || !strlen($_POST['name']) > 0 ){
    $something_to_say = "Missing name";
    require_once("../view/paiementPage.php");
    exit();
}
elseif(!isset($_POST['email']) || !strlen($_POST['email']) > 0){
    $something_to_say = "Missing email";
    require_once("../view/paiementPage.php");
    exit();
}
elseif(!isset($_POST['number']) || !strlen($_POST['number']) > 0){
    $something_to_say = "Missing number";
    require_once("../view/paiementPage.php");
    exit();
}
elseif(!isset($_POST['address']) || !strlen($_POST['address']) > 0){
    $something_to_say = "Missing address";
    require_once("../view/paiementPage.php");
    exit();
}
elseif(!isset($_POST['postalCode']) || !strlen($_POST['postalCode']) > 0){
    $something_to_say = "Missing postal code";
    require_once("../view/paiementPage.php");
    exit();
}
elseif(!isset($_POST['country']) || !strlen($_POST['country']) > 0){
    $something_to_say = "Missing country";
    require_once("../view/paiementPage.php");
    exit();
}
elseif(!isset($_POST['specification'])){
    $something_to_say = "Unset specification";
    require_once("../view/paiementPage.php");
    exit();
}
elseif(!isset($_POST['cardName']) || !strlen($_POST['cardName']) > 0){
    $something_to_say = "Missing card Name";
    require_once("../view/paiementPage.php");
    exit();
}
elseif(!isset($_POST['cardNumber']) || !strlen($_POST['cardNumber']) > 0){
    $something_to_say = "Missing card number";
    require_once("../view/paiementPage.php");
    exit();
}
elseif(!isset($_POST['cardCVV']) || !strlen($_POST['cardCVV']) > 0){
    $something_to_say = "Missing card CVV";
    require_once("../view/paiementPage.php");
    exit();
}
elseif(!isset($_POST['cardExpiry']) || !strlen($_POST['cardExpiry']) > 0){
    $something_to_say = "Missing card expiry date";
    require_once("../view/paiementPage.php");
    exit();
}
elseif(!isset($_POST['delivery']) || !strlen($_POST['delivery']) > 0){
    $something_to_say = "Missing delivery";
    require_once("../view/paiementPage.php");
    exit();
}
else {
    session_start();

    if(isset($_SESSION['id'])){
        $id = $_SESSION['id'];


        $userModel = new UserModel();
        $commandeModel = new CommandeModel();
        $livreurModel = new LivreurModel();
    
        $userModel->update_user($id, $_POST['name'], $_POST['email'], $_POST['number'], $_POST['country'], $_POST['address'], $_POST['postalCode'], $_POST['specification']);
    
        $commandesEnCours = $commandeModel->get_commande($id, 0);
        foreach ($commandesEnCours as $commande) {
            $commande['statut'] = 1; //  signifie que la commande est passé et est en cours de validation.
            
            $id_livreur = $livreurModel->get_id($_POST['delivery']);
            $commande['id_livreur'] = $id_livreur;
    
            $commandeModel->update_commande($commande['id'], $commande['statut'], $commande['id_livreur']z);
        }
    
        header("Location: ../view/cataloguePage.php");
        exit();
    }
    else{
        $something_to_say = "Connect yourself !";
        require_once("../view/paiementPage.php");
        exit();    
    }
}

?>
<?php

require_once("../Models/utilisateurModel.php");
require_once("../Models/commandeModel.php");
require_once("../Models/livreurModel.php");


if(!isset($_POST['name']) || !strlen($_POST['name']) > 0 ){
    $something_to_say = "Missing name";
    require_once("../view/changeInfoPage.php");
    exit();
}
elseif(!isset($_POST['email']) || !strlen($_POST['email']) > 0){
    $something_to_say = "Missing email";
    require_once("../view/changeInfoPage.php");
    exit();
}
elseif(!isset($_POST['number']) || !strlen($_POST['number']) > 0){
    $something_to_say = "Missing number";
    require_once("../view/changeInfoPage.php");
    exit();
}
elseif(!isset($_POST['mdp']) || !strlen($_POST['mdp']) > 0){
    $something_to_say = "Missing Password";
    require_once("../view/changeInfoPage.php");
    exit();
}
elseif(!isset($_POST['address']) || !strlen($_POST['address']) > 0){
    $something_to_say = "Missing address";
    require_once("../view/changeInfoPage.php");
    exit();
}
elseif(!isset($_POST['postalCode']) || !strlen($_POST['postalCode']) > 0){
    $something_to_say = "Missing postal code";
    require_once("../view/changeInfoPage.php");
    exit();
}
elseif(!isset($_POST['country']) || !strlen($_POST['country']) > 0){
    $something_to_say = "Missing country";
    require_once("../view/changeInfoPage.php");
    exit();
}
elseif(!isset($_POST['specification'])){
    $something_to_say = "Unset specification";
    require_once("../view/changeInfoPage.php");
    exit();
}
else {
    session_start();

    if(isset($_SESSION['id'])){
        $id = $_SESSION['id'];


        $userModel = new UserModel();
        $commandeModel = new CommandeModel();
        $livreurModel = new LivreurModel();
    
        $userModel->update_user_change($id, $_POST['name'], $_POST['mdp'], $_POST['email'], $_POST['number'], $_POST['country'], $_POST['address'], $_POST['postalCode'], $_POST['specification']);
    
        header("Location: ../view/profilPage.php");
        exit();
    }
    else{
        $something_to_say = "Connect yourself !";
        require_once("../view/profilPage.php");
        exit();    
    }
}

?>
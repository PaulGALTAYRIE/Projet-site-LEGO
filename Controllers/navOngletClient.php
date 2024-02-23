<?php

if (isset($_POST['panierButton'])) {
    header("Location: ../view/panierPage.php");
    exit();
}

if (isset($_POST['checkoutButton'])) {
    header("Location: ../view/paiementPage.php");
    exit();
}
if (isset($_POST['checkoutButtonEmpty'])) {
    $something_to_say ='Your shopping cart is empty !';
    require_once "../view/panierPage.php";
    exit();
}

if (isset($_POST['logoButton'])) {
    header("Location: /view/cataloguePage.php");
    exit();
}

if (isset($_POST['profilButton'])) {
    header("Location: /view/ProfilPage.php");
    exit();
}

if (isset($_POST['newAccountButton'])) {
    header("Location: /view/nouveauComptePage.php");
    exit();
}

if (isset($_POST['change_button'])) {
    header("Location: /view/changeInfoPage.php");
    exit();
}
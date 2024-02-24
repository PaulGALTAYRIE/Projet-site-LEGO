<?php

if (isset($_POST['panierButton'])) {
    header("Location: view/panierPage.php");
    exit();
}

if (isset($_POST['checkoutButton'])) {
    header("Location: view/paiementPage.php");
    exit();
}
if (isset($_POST['checkoutButtonEmpty'])) {
    $something_to_say ='Your shopping cart is empty !';
    require_once "../view/panierPage.php";
    exit();
}

if (isset($_POST['logoButton'])) {
    header("Location: /tai/tai_frog/project/view/cataloguePage.php");
    exit();
}
if (isset($_POST['catalogueButton'])) {
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

// admin

if (isset($_POST['commandesButton'])) {
    header("Location: /view/commandesPage.php");
    exit();
}

if (isset($_POST['logoAdmin'])) {
    header("Location: /view/stocksPage.php");
    exit();
}

if (isset($_POST['profilAdminButton'])) {
    header("Location: /view/profilAdminPage.php");
    exit();
}

if (isset($_POST['stocksButton'])) {
    header("Location: /view/stocksPage.php");
    exit();
}

if (isset($_POST['change_button_admin'])) {
    header("Location: /view/changeInfoAdminPage.php");
    exit();
}
if (isset($_POST['commandesAdminButton'])) {
    header("Location: /view/commandesPage.php");
    exit();
}


<?php

if (isset($_POST['panierButton'])) {
    header("Location: /tai/tai_frog/project/view/panierPage.php");
    exit();
}

if (isset($_POST['checkoutButton'])) {
    header("Location: /tai/tai_frog/project/view/paiementPage.php");
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
    header("Location: /tai/tai_frog/project/view/cataloguePage.php");
    exit();
}

if (isset($_POST['profilButton'])) {
    header("Location: /tai/tai_frog/project/view/profilPage.php");
    exit();
}

if (isset($_POST['newAccountButton'])) {
    header("Location: /tai/tai_frog/project/view/nouveauComptePage.php");
    exit();
}

if (isset($_POST['change_button'])) {
    header("Location: /tai/tai_frog/project/view/changeInfoPage.php");
    exit();
}

// admin

if (isset($_POST['commandesButton'])) {
    header("Location: /tai/tai_frog/project/view/commandesPage.php");
    exit();
}

if (isset($_POST['logoAdmin'])) {
    header("Location: /tai/tai_frog/project/view/stocksPage.php");
    exit();
}

if (isset($_POST['profilAdminButton'])) {
    header("Location: /tai/tai_frog/project/view/profilAdminPage.php");
    exit();
}

if (isset($_POST['stocksButton'])) {
    header("Location: /tai/tai_frog/project/view/stocksPage.php");
    exit();
}

if (isset($_POST['change_button_admin'])) {
    header("Location: /tai/tai_frog/project/view/changeInfoAdminPage.php");
    exit();
}
if (isset($_POST['commandesAdminButton'])) {
    header("Location: /tai/tai_frog/project/view/commandesPage.php");
    exit();
}


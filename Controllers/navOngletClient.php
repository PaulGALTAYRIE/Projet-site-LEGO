<?php

if (isset($_POST['panierButton'])) {
    header("Location: ../view/panierPage.php");
    exit();
}

if (isset($_POST['checkoutButton'])) {
    header("Location: ../view/paiementPage.php");
    exit();
}

if (isset($_POST['logoButton'])) {
    header("Location: /view/cataloguePage.php");
    exit();
}
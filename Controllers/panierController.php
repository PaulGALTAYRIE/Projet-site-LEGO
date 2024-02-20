<?php
    require_once("../Models/ordreModel.php");


if (isset($_POST['remove_btn'])) {

    $ordreModel = new OrdreModel();

    $ordreModel->remove_ordre($_POST['ordre']);
    header("Location: ../view/panierPage.php");
    exit();
}
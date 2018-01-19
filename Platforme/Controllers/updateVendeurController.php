<?php
require_once('Models/VendeurSQL.php');


$update = new VendeurSQL();
if (!isset($_SESSION['connected']) || $_SESSION['connected'] === false) header('Location: index.php?p=Connection');

$recupVendeur = $update->recupererVendeur($_SESSION['id']);


if (!empty($_POST['nameSociety']) && !empty($_POST['phone']) && !empty($_POST['noSiret']) && !empty($_POST['mail']) && !empty($_POST['password'])) {

    $update->updateCompteVendeur($_POST['nameSociety'], $_POST['phone'], $_POST['noSiret'], $_POST['mail'], $_POST['password'], $_SESSION['id']);
    $succes = "<p class='erreur'>Modification terminée</p>";

}

require_once("Views/updateVendeur.php");
<?php
require_once ('Models/LocalSQL.php');

$update = new LocalSQL();
$vendeur= new VendeurSQL();
if (!isset($_SESSION['connected']) || $_SESSION['connected'] === false && $_SESSION['entreprise']===false || $_SESSION['particulier']=== true) header('Location: index.php?p=Connection');
$recupVendeur=$vendeur->recupererVendeur($_SESSION['id']);
$selectWithId = $update->selectLocalWithId($_GET['id']);

if (!empty($_POST['name']) && !empty($_POST['address']) && !empty($_POST['area']) && !empty($_POST['price'])&& !empty($_POST['time'])&& !empty($_POST['description'])) {
    $update->updateCommande($_POST['name'], $_POST['address'], $_POST['area'], $_POST['price'], $_POST['time'], $_POST['description'],$_GET['id']);
    $succes = "<p class='erreur'>Modification terminée</p>";

}
require_once ("Views/updateLoc.php");

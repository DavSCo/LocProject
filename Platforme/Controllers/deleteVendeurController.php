<?php
require_once('Models/VendeurSQL.php');
if (!isset($_SESSION['connected']) || $_SESSION['connected'] === false )
    header('Location: index.php?p=Connection');

$delete = new VendeurSQL();
$recupVendeur=$delete->recupererVendeur($_SESSION['id']);

if (!empty($_GET['id'])) {
    $delete->supprimerCompteVendeur($_GET['id']);
/*    session_destroy();*/
    require_once ('deconnectionController.php');


}
require_once('Views/deleteVendeur.php');


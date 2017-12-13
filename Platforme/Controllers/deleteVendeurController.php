<?php
require_once('Models/VendeurSQL.php');
if (!isset($_SESSION['connected']) || $_SESSION['connected'] === false )
    header('Location: index.php?p=Connection');

$delete = new VendeurSQL();

if (!empty($_GET['id'])) {
    $delete->supprimerCompteVendeur($_GET['id']);
    header('Location: index.php?p=join');

}
require_once('Views/adminVendeur.php');


<?php
require_once('Models/UserSQL.php');
if (!isset($_SESSION['connected']) || $_SESSION['connected'] === false )
    header('Location: index.php?p=Connection');

$delete = new VendeurSQL();
$recupVendeur=$delete->recupererVendeur($_SESSION['id']);



require_once('Views/deleteVendeur.php');


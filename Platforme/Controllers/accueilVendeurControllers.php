<?php require_once ('Models/VendeurSQL.php');
if (!isset($_SESSION['connected']) || $_SESSION['connected'] === false) header('Location: index.php?p=Connection');

$vendeur= new VendeurSQL();
$recupVendeur=$vendeur->recupererVendeur($_SESSION['id']);

require_once ("Views/accueilVendeur.php");

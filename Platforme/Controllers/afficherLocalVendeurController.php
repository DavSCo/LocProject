<?php
require_once ('Models/VendeurSQL.php');
$afficher = new VendeurSQL();
if (!isset($_SESSION['connected']) || $_SESSION['connected'] === false) header('Location: index.php?p=Connection');
$afficherLocalVendeur  = $afficher->afficherLocalVendeur($_SESSION['id']);
$recupVendeur=$afficher->recupererVendeur($_SESSION['id']);

if (!empty($_SESSION))
{
    $afficher->afficherLocalVendeur($_SESSION['id']);
    $succes = "<p class='erreur'>Local Actif</p>";

}
require_once ('Views/localVendeur.php');
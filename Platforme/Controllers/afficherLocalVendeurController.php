<?php
require_once ('Models/VendeurSQL.php');
$afficher = new VendeurSQL();
$afficherLocalVendeur  = $afficher->afficherLocalVendeur($_SESSION['id']);

if (!empty($_SESSION))
{
    $afficher->afficherLocalVendeur($_SESSION['id']);
    $succes = "<p class='erreur'>Local Actif</p>";

}
require_once ('Views/localVendeur.php');
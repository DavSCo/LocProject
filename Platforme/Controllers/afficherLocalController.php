<?php
require_once ('Models/UserSQL.php');
$afficher = new UserSQL();
$afficherLocalUser  = $afficher->afficherLocal($_SESSION['id']);

if (!empty($_SESSION))
{
    $afficher->afficherLocal($_SESSION['id']);
    $succes = "<p class='erreur'>Local Actif</p>";

}
require_once ('Views/localTest.php');
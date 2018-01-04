<?php
require_once ('Models/UserSQL.php');
$afficher = new UserSQL();
$recupUsers=$afficher->recupererUtilisateur($_SESSION['id']);

$afficherLocalUser  = $afficher->afficherLocal($_SESSION['id']);

if (!empty($_SESSION))
{
    $afficher->afficherLocal($_SESSION['id']);
    $succes = "<p class='erreur'>Local Actif</p>";

}
require_once ('Views/localUser.php');
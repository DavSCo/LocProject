<?php
require_once ('Models/UserSQL.php');

$create = new UserSQL();

if (!empty($_POST)) {

    $create->inscriptionCompte();
    $succes = "<p class='erreur'>Inscription terminée</p>";

}
header('Location: index.php?p=Connection');

require_once ("Views/signIn.php");
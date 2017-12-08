<?php
echo '<pre>';
var_dump($_SESSION);
echo '</pre>';
require_once ('Models/UserSQL.php');
 if (!isset($_SESSION['connected']) || $_SESSION['connected'] === false)
    header('Location: index.php?p=Connection');

$update = new UserSQL();
$updateUsers=$update->recupererUtilisateur($_SESSION['id']);


if (!empty($_POST['name']) && !empty($_POST['lastName']) && !empty($_POST['mail']) && !empty($_POST['password'])) {
    $update->updateCompte($_POST['name'], $_POST['lastName'], $_POST['mail'], $_POST['password'], $_SESSION['id']);
    $succes = "<p class='erreur'>Modification terminée</p>";
}

require_once ("Views/admin_user.php");
<?php
require_once('Models/UserSQL.php');
if (!isset($_SESSION['connected']) || $_SESSION['connected'] === false )
    header('Location: index.php?p=Connection');

$delete = new UserSQL();
/*$deleteUsers = $delete->recupererUtilisateur($_SESSION['id']);*/

if (!empty($_GET['id'])) {
    $delete->supprimerCompte($_GET['id']);
    header('Location: index.php?p=signIn ');

}
require_once('Views/admin_user.php');


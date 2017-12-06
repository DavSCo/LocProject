<?php
require_once ('Models/UserSQL.php');
$update = new UserSQL();
if (!isset($_SESSION['connected']) || $_SESSION['connected'] === false)
    header('Location: index.php?p=connection');

if (!empty($_POST))
{
    $update->updateCompte();
    $succes = "<p class='erreur'>Modification terminée</p>";



}else{
    echo 'error';
}

require_once ("views/admin_user.php");
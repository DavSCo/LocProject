<?php require_once ('Models/UserSQL.php');
if (!isset($_SESSION['connected']) || $_SESSION['connected'] === false) header('Location: index.php?p=Connection');

$users= new UserSQL();
$recupUsers=$users->recupererUtilisateur($_SESSION['id']);

require_once ("Views/accueilUsers.php");

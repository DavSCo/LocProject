<?php
require_once('Models/UserSQL.php');
require_once ('Models/LocalSQL.php');
if (!isset($_SESSION['connected']) || $_SESSION['connected'] === false )
    header('Location: index.php?p=Connection');

$users = new UserSQL();
$addCommande=new LocalSQL();
$selectWithId = $addCommande->selectLocalWithId($_GET['id']);
$recupUsers=$users->recupererUtilisateur($_SESSION['id']);

$user_id=intval($_GET['id']);
$local_id=intval($_GET['local']);
$addCommande->addCommande($local_id,$user_id);
require_once('Views/paymentPage.php');


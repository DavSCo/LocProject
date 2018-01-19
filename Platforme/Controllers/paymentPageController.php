<?php
require_once ('Models/LocalSQL.php');

$select = new LocalSQL();
if (!isset($_SESSION['connected']) || $_SESSION['connected'] === false) header('Location: index.php?p=Connection');


$selectWithId = $select->selectLocalWithId($_GET['id']);


require_once ('Views/paymentPage.php');
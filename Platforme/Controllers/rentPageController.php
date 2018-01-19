<?php
require_once ('Models/UserSQL.php');

$update = new UserSQL();
if (!isset($_SESSION['connected']) || $_SESSION['connected'] === false) header('Location: index.php?p=Connection');

$updateUsers=$update->recupererUtilisateur($_SESSION['id']);



require_once ('Views/rentPage.php');
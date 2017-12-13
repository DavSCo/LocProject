<?php
require_once ('Models/UserSQL.php');

$update = new UserSQL();
$updateUsers=$update->recupererUtilisateur($_SESSION['id']);



require_once ('Views/rentPage.php');
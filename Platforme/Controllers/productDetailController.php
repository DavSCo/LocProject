<?php
require_once ('Models/LocalSQL.php');

$select = new LocalSQL();

$selectWithId = $select->selectLocalWithId($_GET['id']);



require_once ('Views/product.php');
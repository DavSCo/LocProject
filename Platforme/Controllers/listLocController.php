<?php
require_once ('Models/LocalSQL.php');

$select = new LocalSQL();

$selectAllLocal= $select->selectLocal();

require_once ('Views/listLoc.php');
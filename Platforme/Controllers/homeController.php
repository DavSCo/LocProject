<?php
require_once ('Models/LocalSQL.php');


$select = new LocalSQL();

$selectXLast = $select->selectXLastLocal();
var_dump($_SESSION);

require_once ("Views/home.php");
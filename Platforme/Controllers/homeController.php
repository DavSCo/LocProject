<?php
require_once ('Models/LocalSQL.php');

var_dump($_SESSION);


$select = new LocalSQL();

$selectXLast = $select->selectXLastLocal();


require_once ("Views/home.php");
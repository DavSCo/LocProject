<?php
require_once ('Models/LocalSQL.php');


$select = new LocalSQL();

$selectXLast = $select->selectXLastLocal();


require_once ("Views/home.php");
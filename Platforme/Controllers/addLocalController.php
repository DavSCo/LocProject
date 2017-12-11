<?php
require_once ("Models/LocalSQL.php");
$add = new LocalSQL();
if (!empty($_POST)) {
    $add->addLocal();
    var_dump($_POST);
}
require_once ("Views/addLocal.php");
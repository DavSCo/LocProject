<?php
require_once ("Models/LocalSQL.php");
$add = new LocalSQL();
if (!empty($_POST)) {
    $add->addLocal(htmlentities($_POST['name']),htmlentities($_POST['address']),htmlentities($_POST['area']),htmlentities($_POST['price']),htmlentities($_POST['time']),htmlentities($_POST['description']));
    var_dump($_POST);
}


require_once ("Views/addLocal.php");
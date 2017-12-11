<?php
require_once ("Models/LocalSQL.php");
$add = new LocalSQL();
if (!empty($_POST)) {
    $add->addLocal($_POST['name'],$_POST['address'],$_POST['area'],$_POST['price'],$_POST['time'],$_POST['description'],$_SESSION['id']);
    var_dump($_POST);
}






require_once ("Views/addLocal.php");
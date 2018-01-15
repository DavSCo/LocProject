<?php
require_once ("Models/LocalSQL.php");
$add = new LocalSQL();
var_dump($_FILES);
if (!empty($_FILES)) {
    $name = $_FILES['photo']['name'];
    $chemin = $_FILES['photo']['tmp_name'];
    $dossier = 'Views/img/upload/' . $name;

    if (move_uploaded_file($chemin, $dossier)) {
        echo 'Upload effectué avec succès !';


    } else {
        echo 'Echec de l\'upload !';

    }

}
$id=intval($_SESSION['id']);
if (!empty($_POST)) {
    $add->addLocal(htmlentities($_POST['name']),htmlentities($_POST['address']),htmlentities($_POST['area']),htmlentities($_POST['price']),htmlentities($_POST['time']),htmlentities($_POST['description']),$dossier,$id);

}



require_once ("Views/addLocal.php");
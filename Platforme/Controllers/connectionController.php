<?php
require_once('Models/VendeurSQL.php');
require_once('Models/UserSQL.php');


$connect = new UserSQL();
$vend = new VendeurSQL();


if ($_POST["Categorie"] == "Entreprise" && (!empty($_POST))) {
    $compteVendeur = $vend->connectionVendeur();

    if (count($compteVendeur) > 0) {

        $_SESSION['connected'] = true;
        $_SESSION['id'] = $compteVendeur[0]['id'];

        var_dump($_SESSION);


    }

} elseif ($_POST["Categorie"] == "Particulier" && (!empty($_POST))) {

    $compte = $connect->connectionCompte();
    $_SESSION['connected'] = true;
    $_SESSION['id'] = $compte[0]['id'];

    var_dump($_SESSION);


} else {
    $_SESSION['connected'] = false;
}

require_once('Views/Connection.php');
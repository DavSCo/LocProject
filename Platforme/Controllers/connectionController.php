<?php
require_once('Models/VendeurSQL.php');
require_once('Models/UserSQL.php');


$connect = new UserSQL();
$vend = new VendeurSQL();


if (isset($_POST["Categorie"])&& ($_POST["Categorie"]== "Entreprise") && (!empty($_POST))) {
    
    $Categorie = $_POST['Categorie'];
    $compteVendeur = $vend->connectionVendeur();

    if (count($compteVendeur) > 0) {

        $_SESSION['entreprise'] = true;
        $_SESSION['particulier'] = false;
        $_SESSION['connected'] = true;
        $_SESSION['id'] = $compteVendeur[0]['id'];
        header('Location: index.php');
    

    }

} elseif (isset($_POST["Categorie"]) && ($_POST["Categorie"]== "Particulier") && (!empty($_POST))) {
    $compte = $connect->connectionCompte();

    if (count($compte) > 0) {
    $_SESSION['entreprise'] = false;
    $_SESSION['particulier'] = true;
    $_SESSION['connected'] = true;
    $_SESSION['id'] = $compte[0]['id'];
    header('Location: index.php');

}

} else {
    $_SESSION['connected'] = false;
}

require_once('Views/Connection.php');
<?php
require_once ('Models/VendeurSQL.php');

$create = new VendeurSQL();

if (!empty($_FILES)) {

    $name=$_FILES['logo']['name'];
    $chemin=$_FILES['logo']['tmp_name'];
    $dossier='Views/img/upload/'.$name;

    if(move_uploaded_file($chemin,$dossier))
    {
        echo 'Upload effectué avec succès !';

        var_dump($_FILES['logo']['tmp_name']);
        var_dump($dossier);
        //echo '<img src="Views/img/upload/'.$name.'">';

    }
    else

    {
        echo 'Echec de l\'upload !';

    }
}
if (!empty($_POST)) {

    $create->inscriptionVendeur($dossier);
    $succes = "<p class='erreur'>Inscription terminée</p>";
}
require_once ("Views/joinVendeur.php");
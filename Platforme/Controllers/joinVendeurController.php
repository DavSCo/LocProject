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


    }
    else

    {
        echo 'Echec de l\'upload !';

    }
}if (!empty($_POST))
{
if($create->Testmail()){
    $create->inscriptionVendeur($dossier);
    $succes = "<p class='erreur'>Inscription terminée</p>";
    echo 'Inscription terminée';
    
}else {
     $erreur = '<p class="erreur">Il y a eu une erreur...</p>';
    echo 'Il existe déjà un compte pour cette adresse mail,inscrivez-vous à nouveaux';
}}


require_once ("Views/joinVendeur.php");
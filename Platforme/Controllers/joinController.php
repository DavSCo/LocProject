<?php
require_once('Models/UserSQL.php');

$create = new UserSQL();

if (!empty($_FILES)) {

    $name = $_FILES['logo']['name'];
    $chemin = $_FILES['logo']['tmp_name'];
    $dossier = 'Views/img/upload/' . $name;

    if (move_uploaded_file($chemin, $dossier)) {
        echo 'Upload effectué avec succès !';
    

    }
}
if (!empty($_POST)) {
if($create->Testmail()){
    $create->inscriptionCompte($dossier);
    $succes = "<p class='erreur'>Inscription terminée</p>";
    echo 'Inscription terminée ';
    
}else {
     $erreur = '<p class="erreur">Il y a eu une erreur...</p>';
    echo 'Ce mail appartient déja à un compte,inscrivez-vous à nouveaux!';
}}




require_once("Views/join.php");
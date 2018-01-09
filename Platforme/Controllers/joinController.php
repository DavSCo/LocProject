<?php
require_once('Models/UserSQL.php');

$create = new UserSQL();

if (!empty($_FILES)) {

    $name = $_FILES['logo']['name'];
    $chemin = $_FILES['logo']['tmp_name'];
    $dossier = 'Views/img/upload/' . $name;

    if (move_uploaded_file($chemin, $dossier)) {
        echo 'Upload effectué avec succès !';
        var_dump($dossier);

    } else {
        echo 'Echec de l\'upload !';

    }
}
if (!empty($_POST)) {

    $create->inscriptionCompte($dossier);

/*    $source = imagecreatefromjpeg($name); // La photo est la source
    $destination = imagecreatetruecolor(200, 200); // On crée la miniature vide

// Les fonctions imagesx et imagesy renvoient la largeur et la hauteur d'une image
    $largeur_source = imagesx($source);
    $hauteur_source = imagesy($source);
    $largeur_destination = imagesx($destination);
    $hauteur_destination = imagesy($destination);

// On crée la miniature
    imagecopyresampled($destination, $source, 0, 0, 0, 0, $largeur_destination, $hauteur_destination, $largeur_source, $hauteur_source);

// On enregistre la miniature sous le nom "mini_couchersoleil.jpg"
    imagejpeg($destination, $name);*/
    $succes = "<p class='erreur'>Inscription terminée</p>";
}




require_once("Views/join.php");
<?php
require_once ('Models/VendeurSQL.php');

$create = new VendeurSQL();

if (!empty($_FILES)) 
{

    $name=$_FILES['logo']['name'];
    $chemin=$_FILES['logo']['tmp_name'];
    $dossier='Views/img/upload/'.$name;

    if(move_uploaded_file($chemin,$dossier))
    {
        echo 'Upload effectué !';
    }
    else
    {
        echo 'Echec de l\'upload !';
    }
}

if (!empty($_POST)) {
    if($create->Testmail()==false)
    {
       $erreur = '<p class="erreur">Il y a eu une erreur...</p>';
       echo 'Ce mail appartient déja à un compte';
   
 
        
    }if($create->Testsiret()==false){
        echo 'numero de siret invalide';

  
 
    }if($create->Testsiret()==false && $create->Testmail()==false)
    {
        echo 'le mail et le numero de siret existe deja ,inscrivez-vous à nouveaux!'; 
        
    }if($create->Testmail()==true && $create->Testsiret()==true){
        
        $create->inscriptionVendeur($dossier);
        $succes = "<p class='erreur'>Inscription terminée</p>";
        echo 'Inscription terminée ';
    
    
    }
}


require_once ("Views/joinVendeur.php");
<?php
require_once('Models/UserSQL.php');

$create = new UserSQL();

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
        
    }if($create->Testmail() && $create->Testsiret()){
        
        $create->inscriptionCompte();
        $succes = "<p class='erreur'>Inscription terminée</p>";
        echo 'Inscription terminée ';
    
    }
   
}


require_once("Views/join.php");
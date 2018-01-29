<?php
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);

class VendeurSQL
{


    public function inscriptionVendeur($dossier)
    {
        global $bdd;
        $password = crypt($_POST['password'], '$2a$07$302838711915bef2db65cc$');
        $nameSociety = $_POST['nameSociety'];
        $mail = $_POST['mail'];
        $noSiret = $_POST['noSiret'];
        $phone = $_POST['phone'];
        $inscription = $bdd->prepare("INSERT INTO vendeur (nameSociety, password, mail, noSiret, phone,logo) VALUES(:nameSoc, :password, :mail, :noSiret, :phone, :logo)");

        $inscription->bindParam(':logo', $dossier, PDO::PARAM_STR);
        $inscription->bindParam(":nameSoc", $nameSociety, PDO::PARAM_STR);
        $inscription->bindParam(":mail", $mail, PDO::PARAM_STR);
        $inscription->bindParam(":noSiret", $noSiret, PDO::PARAM_STR);
        $inscription->bindParam(":phone", $phone, PDO::PARAM_STR);
        $inscription->bindParam(":password", $password, PDO::PARAM_STR);

        if ($inscription->execute()) {

            return $bdd->lastInsertId();
        }
    }


    public function recupererVendeur($id=null)
    {
        global $bdd;

        if ($id !== null){
            $recuperer=$bdd->prepare("SELECT * FROM vendeur where id=:id");
            $cast=intval($id);
            $recuperer->bindParam(":id", $cast, PDO::PARAM_STR);
            $recuperer->execute();
            $users=$recuperer->fetchAll();
            return $users;
        }else{
            $recuperer=$bdd->prepare("select * from vendeur");
            $recuperer->execute();
            $recupAll=$recuperer->fetchAll();
            return $recupAll;

        }




    }
        public function Testmail()
    {
        global $bdd;
        $mail = $_POST['mail'];
        $inscription = $bdd->prepare("SELECT * FROM vendeur WHERE mail = :mail");
        $inscription->bindParam(":mail", $mail, PDO::PARAM_STR);
        $inscription->execute();
        $compte = $inscription->fetchAll();
        
            if (count($compte) > 0)
        {
                return false;
                
		} else{
                return true;
		}
        
     }
     public function Testsiret()
    {
        global $bdd;
        $noSiret = $_POST['noSiret'];
        $inscription = $bdd->prepare("SELECT * FROM vendeur WHERE noSiret = :noSiret");
        $inscription->bindParam(":noSiret", $noSiret, PDO::PARAM_STR);
        $inscription->execute();
        $compte = $inscription->fetchAll();
        
            if (count($compte) > 0)
        {
                return false;
                
		} else{
                return true;
		}
        
     }

    public function updateCompteVendeur($nameSociety, $noSiret,$phone,$mail,$password,$id)
    {
        global $bdd;


        $password = crypt($password, '$2a$07$302838711915bef2db65cc$');
        $update=$bdd->prepare("UPDATE vendeur SET  nameSociety = :nameSociety,phone=:phone, noSiret= :noSiret , mail = :mail, password = :password WHERE id=:id");

        $update->bindParam(":nameSociety", $nameSociety, PDO::PARAM_STR);
        $update->bindParam(":phone", $phone, PDO::PARAM_STR);
        $update->bindParam(":noSiret", $noSiret, PDO::PARAM_STR);
        $update->bindParam(":mail", $mail, PDO::PARAM_STR);
        $update->bindParam(":password", $password, PDO::PARAM_STR);
        $update->bindParam(":id", $id, PDO::PARAM_STR);
        $update->execute();


    }



    public function supprimerCompteVendeur($id)
    {
        global $bdd;


        $delete=$bdd->prepare("DELETE from vendeur where id= :id");
        $delete->bindParam(":id", $id, PDO::PARAM_STR);

        $delete->execute();


    }

    public function afficherLocalVendeur($id)
    {
        global $bdd;
        $afficher=$bdd->prepare("SELECT * from locaux where vend_id=:vend_id");
        $afficher->bindParam(":vend_id",$id,PDO::PARAM_STR);
        $afficher->execute();
        $afficherLocal=$afficher->fetchAll();

        return $afficherLocal;
    }



    public function connectionVendeur()
    {

        global $bdd;
        $mail = $_POST['mail'];
        $password = $_POST['password'];
        $password = crypt($_POST['password'], '$2a$07$302838711915bef2db65cc$');

        $vendeur = $bdd->prepare("SELECT * FROM vendeur WHERE mail = :mail AND password = :password");

        $vendeur->bindParam(":mail", $mail, PDO::PARAM_STR);

        $vendeur->bindParam(":password", $password, PDO::PARAM_STR);

        $vendeur->execute();

        $compteVendeur = $vendeur->fetchAll();

        return $compteVendeur;
    }
}
<?php
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);

class UserSQL
{

    public function inscriptionCompte()
    {
        global $bdd;
        $password = crypt($_POST['password'], '$2a$07$302838711915bef2db65cc$');
        $name = $_POST['name'];
        $lastName = $_POST['lastName'];
        $nameSoc = $_POST['nameSoc'];
        $mail = $_POST['mail'];
        $noSiret = $_POST['noSiret'];
        $phone = $_POST['phone'];
        //$logo = $_POST['logo'];

        $inscription = $bdd->prepare("INSERT INTO users (name, lastName, nameSoc, password, mail, noSiret, phone) VALUES(:name, :lastName, :nameSoc, :password, :mail, :noSiret, :phone)");


        $inscription->bindParam(":name", $name, PDO::PARAM_STR);
        $inscription->bindParam(":lastName", $lastName, PDO::PARAM_STR);
        $inscription->bindParam(":nameSoc", $nameSoc, PDO::PARAM_STR);
        // $req->bindValue(":logo", $logo,PDO::PARAM_STR);
        $inscription->bindParam(":mail", $mail, PDO::PARAM_STR);
        $inscription->bindParam(":noSiret", $noSiret, PDO::PARAM_STR);
        $inscription->bindParam(":phone", $phone, PDO::PARAM_STR);
        $inscription->bindParam(":password", $password, PDO::PARAM_STR);

        if ($inscription->execute()) {

            return $bdd->lastInsertId();
        }
    }

    public function connectionCompte()
    {

        global $bdd;
        $mail = $_POST['mail'];
        $password = crypt($_POST['password'], '$2a$07$302838711915bef2db65cc$');
        $connection = $bdd->prepare("SELECT * FROM users WHERE mail = :mail AND password = :password");
        $connection->bindParam(":mail", $mail, PDO::PARAM_STR);
        $connection->bindParam(":password", $password, PDO::PARAM_STR);
        $connection->execute();
        $compte = $connection->fetchAll();

        return $compte;
    }

    public function updateCompte($name, $lastName,$mail,$password,$id)
    {
        global $bdd;


        $password = crypt($password, '$2a$07$302838711915bef2db65cc$');
        $update=$bdd->prepare("UPDATE users SET  name = :name, lastName= :lastName , mail = :mail, password = :password WHERE id=:id");

        $update->bindParam(":name", $name, PDO::PARAM_STR);
        $update->bindParam(":lastName", $lastName, PDO::PARAM_STR);
        $update->bindParam(":mail", $mail, PDO::PARAM_STR);
        $update->bindParam(":password", $password, PDO::PARAM_STR);
        $update->bindParam(":id", $id, PDO::PARAM_STR);
        $update->execute();


    }

    public function recupererUtilisateur($id=null)
    {
        global $bdd;

        if ($id !== null){
        $recuperer=$bdd->prepare("SELECT * FROM users where id=:id");
        $cast=intval($id);
        $recuperer->bindParam(":id", $cast, PDO::PARAM_STR);
        $recuperer->execute();
        $users=$recuperer->fetchAll();
        return $users;
        }else{
            $recuperer=$bdd->prepare("select * from users");
            $recuperer->execute();
            $recupAll=$recuperer->fetchAll();
            return $recupAll;

        }




    }

    public function supprimerCompte($id)
    {
        global $bdd;


        $delete=$bdd->prepare("DELETE from users where id= :id");
        $delete->bindParam(":id", $id, PDO::PARAM_STR);

        $delete->execute();


    }


}
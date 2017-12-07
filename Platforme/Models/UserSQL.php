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
        $password = $_POST['password'];
        $password = crypt($_POST['password'], '$2a$07$302838711915bef2db65cc$');

        $connection = $bdd->prepare("SELECT * FROM users WHERE mail = :mail AND password = :password");

        $connection->bindParam(":mail", $mail, PDO::PARAM_STR);

        $connection->bindParam(":password", $password, PDO::PARAM_STR);

        $connection->execute();

        $compte = $connection->fetchAll();

        return $compte;
    }

    public function updateCompte()
    {
        global $bdd;


        $name = $_POST['name'];
        $lastName = $_POST['lastName'];
        $mail = $_POST['mail'];
        $password = crypt($_POST['password'], '$2a$07$302838711915bef2db65cc$');


        $update=$bdd->prepare("UPDATE users SET  name = :name, lastName= :lastName , mail = :mail, password = :password WHERE mail=:mail");
        $update->bindParam(":name", $name, PDO::PARAM_STR);
        $update->bindParam(":lastName", $lastName, PDO::PARAM_STR);
        $update->bindParam(":mail", $mail, PDO::PARAM_STR);
        $update->bindParam(":password", $password, PDO::PARAM_STR);






    }

    public function supprimerCompte()
    {
        global $bdd;
        $utilisateurs= $_SESSION['id'];

        $drop=$bdd->prepare("DROP user from users where id= :id");
        $drop->execute();


    }


}
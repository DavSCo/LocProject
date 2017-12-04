<?php

/**
 * Created by PhpStorm.
 * User: davidcohen
 * Date: 04/12/2017
 * Time: 10:24
 */
class UserSQL
{

    public function inscriptionCompte() {
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
        $inscription->execute();
    }

}
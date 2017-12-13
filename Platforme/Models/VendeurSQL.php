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
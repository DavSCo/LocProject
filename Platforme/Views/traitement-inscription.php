<?php


 session_start();                                   
 ini_set('display_errors',1);
 ini_set('error_reporting',E_ALL);


require('includes/init.php');


if (!empty($_POST)) {
    $name = $_POST['name'];
    $lastName = $_POST['lastName'];
    $nameSoc = $_POST['nameSoc'];
    $password = $_POST['password'];
    $passwordcrypt = crypt($_POST['password'], '$2a$07$302838711915bef2db65cc$');
    $mail = $_POST['mail'];
    $noSiret = $_POST['noSiret'];
    $phone = $_POST['phone'];
    //$logo = $_POST['logo'];


    $req = $bdd->prepare("INSERT INTO users (name, lastName, nameSoc, password, mail, noSiret, phone) VALUES(:name, :lastName, :nameSoc, :password, :mail, :noSiret, :phone)");


    $req->bindValue(":name", $name, PDO::PARAM_STR);
    $req->bindValue(":lastName", $lastName, PDO::PARAM_STR);
    $req->bindValue(":nameSoc", $nameSoc, PDO::PARAM_STR);
    // $req->bindValue(":logo", $logo,PDO::PARAM_STR);
    $req->bindValue(":mail", $mail, PDO::PARAM_STR);
    $req->bindValue(":noSiret", $noSiret, PDO::PARAM_STR);
    $req->bindValue(":phone", $phone, PDO::PARAM_STR);
    $req->bindValue(":password", $passwordcrypt, PDO::PARAM_STR);
    $res = $req->execute();
    var_dump($_POST);
    //header('location:connexion.php');


}
    
   ?>
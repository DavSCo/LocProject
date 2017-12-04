<?php
require_once ('Models/UserSQL.php');

$create = new UserSQL();

if (!empty($_POST)) {

    $create->inscriptionCompte();
    $succes = "<p class='erreur'>Inscription terminée</p>";
    header('Location:index.php');

    if ($passwordcrypt == $res['password'])
    {
        $_SESSION['user'] =
            [
                'mail' => $mail,
                'id'=> $res['id']
            ];

        echo 'Password is valid!';
        header('location:index.php');

    }
    else
    {
        echo 'Invalid password.';
        header('location:index.php');

    };
}

require_once ("Views/signIn.php");
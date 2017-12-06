<?php
require_once('Models/UserSQL.php');

$connect = new UserSQL();

if (!empty($_POST)) {

    $compte = $connect->connectionCompte();

    if (count($compte)>0){

        $_SESSION['connected'] = true;
        $_SESSION['id'] = $compte[0]['id'];

         header('Location: index.php');

    }
}
else {
         echo 'error';
}

require_once('Views/Connection.php');
?>
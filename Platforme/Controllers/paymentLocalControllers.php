<?php
require_once('Models/UserSQL.php');
require_once ('Models/LocalSQL.php');
if (!isset($_SESSION['connected']) || $_SESSION['connected'] === false )
    header('Location: index.php?p=Connection');

$users = new UserSQL();
$addCommande=new LocalSQL();
$selectWithId = $addCommande->selectLocalWithId($_GET['id']);
$recupUsers=$users->recupererUtilisateur($_SESSION['id']);


$number = $_POST['number'];

function is_valid_luhn($number) {
    settype($number, 'string');
    $sumTable = array(
        array(0,1,2,3,4,5,6,7,8,9),
        array(0,2,4,6,8,1,3,5,7,9));
    $sum = 0;
    $flip = 0;
    for ($i = strlen($number) - 1; $i >= 0; $i--) {
        $sum += $sumTable[$flip++ & 0x1][$number[$i]];
    }
    return $sum % 10 === 0;
}


if (!empty($_POST['number']))
{


    if (is_valid_luhn($number) == true)
    {
        $user_id=intval($_GET['id']);
        $local_id=intval($_GET['local']);
        $addCommande->addCommande($local_id,$user_id);
        header('Location: index.php');
    }else
    {
        echo "<p>Erreur carte</p>";
    }
}



require_once('Views/paymentPage.php');


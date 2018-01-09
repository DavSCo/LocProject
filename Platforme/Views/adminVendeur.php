<!--<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Views/css/admin_user.css">
    <title>Document</title>
</head>
<body>
<div class="admin-panel clearfix">
    <div class="slidebar">
        <div class="logo">
            <a href=""></a>
            <h1><?/*= $updateVendeur[0]['nameSociety'] */?></h1>
        </div>
        <ul>
            <li><a href="index.php?p=localVendeur" id="targeted">Locations</a></li>
            <li><a href="#updateVendeur">Update</a></li>
            <li><a href="#deleteVendeur">Delete</a></li>
        </ul>
    </div>
    <div class="main">
        <div class="mainContent clearfix">
            <div class="updateVendeur" id="updateVendeur">
                <form method="post">
                    <input type="text" name="nameSociety" value="<?/*= $updateVendeur[0]['nameSociety'] */?>"
                           placeholder="nameSociety">
                    <input type="number" name="phone" value="<?/*= $updateVendeur[0]['phone'] */?>" placeholder="phone">

                    <input type="number" name="noSiret" value="<?/*= $updateVendeur[0]['noSiret'] */?>"
                           placeholder="noSiret">

                    <input type="email" name="mail" value="<?/*= $updateVendeur[0]['mail'] */?>" placeholder="email">

                    <input type="password" name="password" value="<?/*= $updateVendeur[0]['password'] */?>"
                           placeholder="password">
                    <input type="submit" value="Modifier">
                </form>
            </div>
            <div class="delete" id="deleteVendeur">
                <a href="index.php?p=delete_vendeur&id=<?/*= $_SESSION['id'] */?>">Confirmer</a>
            </div>
        </div>
    </div>
</body>
</html>
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Mon Compte</title>
    <!-- Bootstrap core CSS-->
    <link href="Views/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="Views/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="Views/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <link rel="stylesheet" href="Views/css/formulaire.css">
    <!-- Custom styles for this template-->
    <link href="Views/css/sb-admin.css" rel="stylesheet">

</head>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="#"><?= $recupVendeur[0]['nameSociety']?></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                <a class="nav-link" href="index.php?p=accueilVendeur">
                    <i class="fa fa-fw fa-dashboard"></i>
                    <span class="nav-link-text">Accueil</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
                <a class="nav-link" href="index.php?p=localVendeur">
                    <i class="fa fa-fw fa-table"></i>
                    <span class="nav-link-text">Location</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
                <a class="nav-link" href="index.php?p=updateVendeur">
                    <i class="fa fa-fw fa-table"></i>
                    <span class="nav-link-text">Modifier mes Infos</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
                <a class="nav-link" href="index.php?p=deleteVendeur">
                    <i class="fa fa-fw fa-table"></i>
                    <span class="nav-link-text">Supprimer Mon Compte</span>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php?p=deconnection">
                    <i class="fa fa-fw fa-sign-out"></i>Deconnexion</a>
            </li>
        </ul>
    </div>
</nav>

<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Project</title>

    <!-- Bootstrap core CSS -->
    <link href="Views/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link rel="stylesheet" href="Views/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="Views/vendor/simple-line-icons/css/simple-line-icons.css">

    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="Views/device-mockups/device-mockups.min.css">

    <!-- Custom styles for this template -->
    <link href="Views/css/new-age.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="Views/css/semantic.css">
    <link rel="stylesheet" href="Views/css/connection.css">
    <link href="Views/css/shop-item.css" rel="stylesheet">


</head>

<body id="page-top">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.php">Project</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <?php if (!isset($_SESSION['connected']) || $_SESSION['connected'] === false|| !isset($_SESSION['entreprise'])|| !isset($_SESSION['particulier'])){ ?>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="index.php?p=join">Particulier</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="index.php?p=joinVendeur">Entreprise</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="index.php?p=Connection">Connexion</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="index.php?p=listLoc">Location</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="index.php?p=joinVendeur">ENTREPRISE</a>
                </li>
            </ul>
            <?php }elseif($_SESSION['entreprise']===true && $_SESSION['particulier']===false && isset($_SESSION['connected']) ){?>
                <ul class="navbar-nav ml-auto">
                   <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="index.php?p=listLoc">Location</a>

                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="index.php?p=accueilVendeur">Vendeur</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="index.php?p=deconnection">deconnection</a>
                    </li>
                </ul>
            <?php } elseif($_SESSION['entreprise']===false && $_SESSION['particulier']===true && isset($_SESSION['connected'])){?>
            <ul class="navbar-nav ml-auto">

            <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="index.php?p=accueilUsers">admin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="index.php?p=listLoc">Location</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="index.php?p=deconnection">deconnection</a>
                </li>
            </ul>
           <?php }?>
        </div>
    </div>
</nav>



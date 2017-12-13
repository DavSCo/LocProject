<?php require_once ('Views/Layout.php');


for ($i=0;$i<count($afficherLocalVendeur); $i++){
    ?>
    <div class="local" id="local">
        <div class="col-xs-2 col-xs-offset-1 table-caption">
            <div class="card h-100">
                <a href="#"><img class="card-img-top"  src="<?= $afficherLocalVendeur[$i]['photo'] ?>" alt=""></a>
                <div class="card-body">
                    <h1><?= $afficherLocalVendeur[$i]['name'] ?></h1>
                    <h4 class="card-title">
                        <a href="#"><?= $afficherLocalVendeur[$i]['address'] ?></a>
                    </h4>
                    <p class="card-text"><?= $afficherLocalVendeur[$i]['area'] ?></p>
                </div>
                <div class="card-footer">
                    <p><?= $afficherLocalVendeur[$i]['price'] ?></p> <br>
                    <p><?= $afficherLocalVendeur[$i]['time'] ?></p><br>
                    <p><?= $afficherLocalVendeur[$i]['description'] ?></p>
                </div>
            </div>
        </div>

    </div>
<?php } ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="index.php?p=addLocal">Ajoutez un local</a>

</body>
</html>


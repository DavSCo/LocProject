<?php require_once ('Views/admin_user.php');


for ($i=0;$i<count($afficherLocalUser); $i++){
    ?>
    <br><br>
    <div class="local" id="local">
        <div class="col-xs-2 col-xs-offset-1 table-caption">
            <div class="card h-100">
                <a href="#"><img class="card-img-top"  src="<?= $afficherLocalUser[$i]['photo'] ?>" alt=""></a>
                <div class="card-body">
                    <h1><?= $afficherLocalUser[$i]['name'] ?></h1>
                    <h4 class="card-title">
                        <a href="#"><?= $afficherLocalUser[$i]['address'] ?></a>
                    </h4>
                    <p class="card-text"><?= $afficherLocalUser[$i]['area'] ?></p>
                </div>
                <div class="card-footer">
                    <p><?= $afficherLocalUser[$i]['price'] ?>€</p> <br>
                    <p><?= $afficherLocalUser[$i]['time'] ?>Mois</p><br>
                    <p><?= $afficherLocalUser[$i]['description'] ?></p>
                </div>
            </div>
        </div>

    </div>
<?php } ?>


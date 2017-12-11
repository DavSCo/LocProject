<?php require_once ('Views/Layout.php');

<<<<<<< HEAD
for ($i=0;$i<count($afficherLocalUser); $i++){
    ?>
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
                    <p><?= $afficherLocalUser[$i]['price'] ?></p> <br>
                    <p><?= $afficherLocalUser[$i]['time'] ?></p><br>
                    <p><?= $afficherLocalUser[$i]['description'] ?></p>
                </div>
            </div>
        </div>

    </div>
<?php } ?>
=======
<?php
foreach ($afficherLocalUser as $local)


echo '<div class="local" id="local">';
          echo '<div class="col-xs-2 col-xs-offset-1 table-caption">';
                   echo '<div class="card h-100">';
                       //echo '<a href="#"><img class="card-img-top"  src="'.$local[8].'" alt=""></a>';
                      echo '<div class="card-body">';
                         echo '<h4 class="card-title">';
                               echo '<a href="#">'.$local[3].'</a>';
                        echo '</h4>';
                            echo '<h5>'.$local[4].'</h5>';
                          echo '<p class="card-text">'.$local[5].'</p>';
                       echo '</div>';
                       echo '<div class="card-footer">';
                         echo '<p>'.$local[5].'</p><br>';
                       echo '<p>'.$local[7].'</p><br>';
                     echo '<p>'.$local[6].'</p>';

                          

                      echo '</div>';
                    echo '</div>';
               echo '</div>';

           echo '</div>';
                

?>
>>>>>>> 1f671497a2819d593653d6c897cc858ff98d5f02

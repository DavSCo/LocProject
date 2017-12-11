<?php require_once ('Views/Layout.php')?>

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

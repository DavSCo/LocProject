<?php require_once ('Views/admin_user.php');?>





<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <div class="row">

            <?php foreach ($afficherLocalUser as $item) { ?>

                <div class="col-lg-4 col-md-6 mb-4" style="margin-top: 80px;">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="<?= $item['image'] ?>"  style="height: 250px; width: 395px;"  alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title"><?= $item['name']?></h4>
                            <h5><?php echo $item['price'] ?> €</h5>
                            <p class="card-text"><?php echo $item['area'] ?>m2</p>
                            <p><?= $item['time'] ?>Mois</p><br>
                            <p><?= $item['description'] ?></p>
                        </div>
                        <div class="card-footer">

                            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                        </div>

                    </div>
                </div>

            <?php } ?>
        </div>
    </div>
</div>
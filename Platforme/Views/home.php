<?php
include_once('Layout.php');
?>

    <header class="masthead">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-7 my-auto">
                    <div class="header-content mx-auto">
                        <?php if (array($_SESSION) == null || $_SESSION['connected'] == null) { ?>

                            <h1 class="mb-5">Vous cherchez un bureau ! Un local ! <br>C'est ici que sa ce passe ! </h1>

                            <a href="index.php?p=listLoc" class="btn btn-outline btn-xl js-scroll-trigger">Louez !</a>
                        <?php } elseif ($_SESSION['entreprise'] === true && $_SESSION['particulier'] === false) { ?>
                            <h1 class="mb-5">Espace de travail en plus <br>Rentabiliser votre espace </h1>

                            <a href="index.php?p=addLocal" class="btn btn-outline btn-xl js-scroll-trigger">Deposer
                                votre local </a>
                        <?php } elseif ($_SESSION['entreprise'] === false && $_SESSION['particulier'] === true) { ?>

                            <h1 class="mb-5">Vous cherchez un bureau ! Un local ! <br>C'est ici que sa ce passe ! </h1>
                            <a href="index.php?p=listLoc" class="btn btn-outline btn-xl js-scroll-trigger">Louez !</a>
                        <?php } ?>

                    </div>
                </div>
                <div class="col-lg-5 my-auto">
                    <div class="device-container">
                        <!--<div class="device-mockup iphone6_plus portrait white">
                          <div class="device">
                            <div class="screen">
                              <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                        <!-- <img src="img/demo-screen-1.jpg" class="img-fluid" alt="">-->
                    </div>
                    <div class="button">
                        <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="download bg-primary text-center" id="download">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <h2 class="section-heading">Decouvrez le nouveau monde de la location courte durée</h2>
                    <p>FreeLancer, Start Up, Auto-entrepreneur , inscrivez vous vite ! Et louez ! </p>
                    <div class="badges">
                        <a href="index.php?p=join" class="btn btn-outline btn-xl js-scroll-trigger">Inscription</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="features" id="features">
        <div class="container">
            <div class="section-heading text-center">
                <h2>Nos derniers locaux</h2>
                <p class="text-muted">Trouvez votre local !</p>
                <hr>
            </div>
            <div class="row">
                <div class="row">

                    <?php foreach ($selectXLast as $item) { ?>

                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <a href="#"><img class="card-img-top" src="<?= $item['photo'] ?>"
                                                 style="height: 250px; width: 358px;" alt=""></a>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="index.php?p=productDetail&id=<?php echo $item['id'] ?>"><?php echo $item['name'] ?></a>
                                    </h4>
                                    <h5><?php echo $item['price'] ?> €</h5>
                                    <p class="card-text"><?php echo $item['description'] ?></p>
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
    </section>

    <section class="cta">
        <div class="cta-content">
            <div class="container">
                <h2>N'attendez pas<br>Louez.</h2>
                <a href="#contact" class="btn btn-outline btn-xl js-scroll-trigger">Louez !</a>
            </div>
        </div>
        <div class="overlay"></div>
    </section>

    <section class="contact bg-primary" id="contact">
        <div class="container">
            <h2>We
                <i class="fa fa-heart"></i>
                new friends!</h2>
            <ul class="list-inline list-social">
                <li class="list-inline-item social-twitter">
                    <a href="#">
                        <i class="fa fa-twitter"></i>
                    </a>
                </li>
                <li class="list-inline-item social-facebook">
                    <a href="#">
                        <i class="fa fa-facebook"></i>
                    </a>
                </li>
                <li class="list-inline-item social-google-plus">
                    <a href="#">
                        <i class="fa fa-google-plus"></i>
                    </a>
                </li>
            </ul>
        </div>
    </section>
<?php require_once('Views/footer.php') ?>
<?php
include_once('Layout.php');
?>
<section class="features" id="features">
    <div class="container">
        <div class="section-heading text-center">
            <h2>Les Locations</h2>
            <p class="text-muted">Trouvez votre local !</p>
            <hr>
        </div>
        <div class="row">
            <div class="row">
                <?php

                foreach ($selectAllLocal as $item) {
                    echo '<div class="col-lg-4 col-md-6 mb-4">';
                    echo '<div class="card h-100">';
                    echo '<a href="#"><img class="card-img-top" src="' . $item['photo'] . '" alt=""    style="height: 250px; width: 358px;"></a>';
                    echo '<div class="card-body">';
                    echo '<h4 class="card-title">';
                    echo '<a href="index.php?p=productDetail&id=' . $item['id'] . '">' . $item['name'] . '</a>';
                    echo '</h4>';
                    echo '<h5>' . $item['price'] . ' €</h5>';
                    echo '<p class="card-text">' . $item['description'] . '</p>';
                    echo '<p class="card-text">' . $item['address'] . '</p>';

                    echo '</div>';
                    echo '<div class="card-footer">';
                    echo '<small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </div>
</section>


<footer>
    <div class="container">
        <p>&copy; 2017 Start Bootstrap. All Rights Reserved.</p>
        <ul class="list-inline">
            <li class="list-inline-item">
                <a href="#">Privacy</a>
            </li>
            <li class="list-inline-item">
                <a href="#">Terms</a>
            </li>
            <li class="list-inline-item">
                <a href="#">FAQ</a>
            </li>
        </ul>
    </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for this template -->
<script src="js/new-age.min.js"></script>

</body>

</html>

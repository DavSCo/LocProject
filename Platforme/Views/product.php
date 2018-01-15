<?php require_once ('Views/Layout.php'); ?>

  <body>


    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- /.col-lg-3 -->
          <div class="col-lg-3">
              <h1 class="my-4"><?php echo $selectWithId['name']; ?></h1>
              <div class="list-group">
                  <a href="index.php?p=rentPage&id=<?php echo $selectWithId['id']; ?>" class="btn btn-success">Louez !</a>
              </div>
          </div>

        <div class="col-lg-9">

          <div class="card mt-4">
            <img class="card-img-top img-fluid" src="http://placehold.it/900x400" alt="">
            <div class="card-body">
              <h3 class="card-title"><?php echo $selectWithId['name']; ?></h3>
              <h4><?php echo $selectWithId['price']; ?> €</h4>
              <p class="card-text"><?php echo $selectWithId['description']; ?></p>
              <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
              4.0 stars
            </div>
          </div>
          <!-- /.card -->

          <div class="card card-outline-secondary my-4">
            <div class="card-header">
              Details
            </div>
            <div class="card-body">
              <p>Adresse: <?php echo $selectWithId['address']; ?></p>
              <hr>
                <p>Superficie : <?php echo $selectWithId['area']; ?> m2</p>
              <hr>
              <p>Durée minimal de loacation : <?php echo $selectWithId['time']; ?> Mois</p>
              <hr>
            </div>
          </div>
          <!-- /.card -->

        </div>
        <!-- /.col-lg-9 -->

      </div>

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <?php
    require_once ('Views/footer.php');
    ?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>

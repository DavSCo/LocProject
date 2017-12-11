<!doctype html>
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
    <h1><?= $updateUsers[0]['name'] ?></h1>
    <div class="slidebar">
        <div class="logo">
            <a href=""></a>
        </div>
        <ul>
            <li><a href="index.php?p=localTest" id="targeted">Locations</a></li>
            <li><a href="#update">Update</a></li>
            <li><a href="#delete">Delete</a></li>

        </ul>
    </div>
    <div class="main">
        <div class="mainContent clearfix">

            <div class="update" id="update">
                <form method="post">
                    <input type="text" name="name" value="<?= $updateUsers[0]['name'] ?>" placeholder="name">
                    <input type="text" name="lastName" value="<?= $updateUsers[0]['lastName'] ?>"
                           placeholder="lastName">
                    <input type="email" name="mail" value="<?= $updateUsers[0]['mail'] ?>" placeholder="email">
                    <input type="password" name="password" value="<?= $updateUsers[0]['password'] ?>"
                           placeholder="password">
                    <input type="submit" value="Modifier">
                </form>
            </div>


            <div class="delete" id="delete">
                <a href="index.php?p=delete_user&id=<?= $_SESSION['id'] ?>">Confirmer</a>
            </div>


         <!--   <div class="local" id="local">

                <div class="col-xs-2 col-xs-offset-1 table-caption">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="http://placehold.it/350x200" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Item Five</a>
                            </h4>
                            <h5>$24.99</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                        </div>
                    </div>
                </div>

            </div>-->


        </div>
    </div>


</body>
</html>

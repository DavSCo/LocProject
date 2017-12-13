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
    <div class="slidebar">
        <div class="logo">
            <a href=""></a>
            <h1><?= $updateVendeur[0]['nameSociety'] ?></h1>
        </div>
        <ul>
            <li><a href="index.php?p=localVendeur" id="targeted">Locations</a></li>
            <li><a href="#updateVendeur">Update</a></li>
            <li><a href="#deleteVendeur">Delete</a></li>
        </ul>
    </div>
    <div class="main">
        <div class="mainContent clearfix">
            <div class="updateVendeur" id="updateVendeur">
                <form method="post">
                    <input type="text" name="nameSociety" value="<?= $updateVendeur[0]['nameSociety'] ?>"
                           placeholder="nameSociety">
                    <input type="number" name="phone" value="<?= $updateVendeur[0]['phone'] ?>" placeholder="phone">

                    <input type="number" name="noSiret" value="<?= $updateVendeur[0]['noSiret'] ?>"
                           placeholder="noSiret">

                    <input type="email" name="mail" value="<?= $updateVendeur[0]['mail'] ?>" placeholder="email">

                    <input type="password" name="password" value="<?= $updateVendeur[0]['password'] ?>"
                           placeholder="password">
                    <input type="submit" value="Modifier">
                </form>
            </div>
            <div class="delete" id="deleteVendeur">
                <a href="index.php?p=delete_vendeur&id=<?= $_SESSION['id'] ?>">Confirmer</a>
            </div>
        </div>
    </div>
</body>
</html>

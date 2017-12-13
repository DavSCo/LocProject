<?php require_once('Views/Layout.php'); ?>
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
        </div>
        <h1><?= $updateUsers[0]['name'] ?></h1>
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
        </div>
    </div>
</body>
</html>

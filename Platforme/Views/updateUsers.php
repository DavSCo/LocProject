<?php
require_once('Views/admin_user.php');
?>

<header class="masthead">
    <div class="container h-100">
        <div class="login-page">
            <div class="form">
                <form class="ui form" method="post" enctype="multipart/form-data">
                    <h4 class="ui dividing header">Modifier Mes Infos</h4>
                    <div class="field">
                        <label>Name</label>
                        <div class="twelve wide field">
                            <div class="field">
                                <input type="text" name="name" placeholder="Name" value="<?= $recupUsers[0]['name'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label>Nom De Famille</label>
                        <div class="fields">
                            <div class="twelve wide field">
                                <input type="text" value="<?= $recupUsers[0]['lastName'] ?>"
                                       placeholder="Nom" name="lastName"></div>
                        </div>
                    </div>
                    <div class="field">
                        <label>Mail</label>
                        <div class="fields">
                            <div class="twelve wide field">
                                <input type="email" value="<?= $recupUsers[0]['mail'] ?>"
                                       placeholder="Mail" name="mail"></div>
                        </div>
                    </div>
                    <div class="field">
                        <label>password</label>
                        <div class="fields">
                            <div class="twelve wide field">
                                <input type="password" value="<?= $recupUsers[0]['password'] ?>"
                                       placeholder="Mot de Passe" name="password"></div>
                        </div>
                    </div>


                    <button type="submit" class="ui button">Modifier</button>

                </form>
            </div>
        </div>
    </div>

</header>
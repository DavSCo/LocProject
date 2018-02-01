<?php
require_once('Views/adminVendeur.php');
?>
<header class="masthead">
    <div class="container h-100">
        <div class="login-page">
            <div class="form">
                <form class="ui form" method="post" enctype="multipart/form-data">
                    <h4 class="ui dividing header">Modifier Mes Infos</h4>
                    <div class="field">
                        <label>Nom De Société</label>
                        <div class="twelve wide field">
                            <div class="field">
                                <input type="text" id="name" name="nameSociety"
                                       value="<?= $recupVendeur[0]['nameSociety'] ?>"></div>
                        </div>
                    </div>
                    <div class="field">
                        <label>N° Telephone</label>
                        <div class="fields">
                            <div class="twelve wide field">
                                <input type="number" value="<?= $recupVendeur[0]['phone'] ?>"
                                       placeholder="Nom" name="phone">
                            </div>
                        </div>
                        <div class="field">
                            <label>N° Siret</label>
                            <div class="fields">
                                <div class="twelve wide field">
                                    <input type="number" value="<?= $recupVendeur[0]['noSiret'] ?>"
                                           placeholder="noSiret" name="noSiret">
                                </div>
                            </div>
                            <div class="field">
                                <label>Mail</label>
                                <div class="fields">
                                    <div class="twelve wide field">
                                        <input type="email" value="<?= $recupVendeur[0]['mail'] ?>"
                                               placeholder="Mail" name="mail"></div>
                                </div>
                            </div>
                            <div class="field">
                                <label>Price</label>
                                <div class="fields">
                                    <div class="twelve wide field">
                                        <input type="password" value="<?= $recupVendeur[0]['password'] ?>"
                                               placeholder="Mot de Passe" name="password"></div>
                                </div>
                            </div>


                            <button type="submit" class="ui button">Modifier</button>

                </form>
            </div>
        </div>
    </div>

</header>

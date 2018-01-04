<?php
require_once ('Views/admin_user.php');
?>
<br><br><br>
<form id="contact-form" class="form col-xs-4 col-xs-offset-2" method="POST" role="form">
    <div class="form-group">
        <label class="form-label" for="name">Prenom</label>
        <input type="text" class="form-control" id="name" name="name"
               value="<?= $recupUsers[0]['name'] ?>">
    </div>
    <div class="form-group">
        <label class="form-label" for="marque">Nom</label>
        <input type="text" class="form-control" value="<?= $recupUsers[0]['lastName'] ?>"
               placeholder="Nom" name="lastName">
    </div>
    <div class="form-group">
        <label class="form-label" for="price">Mail</label>
        <input type="email" class="form-control" value="<?= $recupUsers[0]['mail'] ?>"
               placeholder="Mail" name="mail">
    </div>
    <div class="form-group">
        <label class="form-label" for="ref">Mot de Passe</label>
        <input class="form-control" type="password" value="<?= $recupUsers[0]['password'] ?>"
               placeholder="Mot de Passe" name="password">
    </div>
    <div class="text-center">
        <input type="submit" value="Modfier" class="btn btn-start-order">
    </div>
</form>

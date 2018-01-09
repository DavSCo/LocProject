<?php
require_once ('Views/adminVendeur.php');
?>
<br><br><br>
<form id="contact-form" class="form col-xs-4 col-xs-offset-2" method="POST" role="form">
    <div class="form-group">
        <label class="form-label" for="name">NameSociety</label>
        <input type="text" class="form-control" id="name" name="nameSociety"
               value="<?= $recupVendeur[0]['nameSociety'] ?>">
    </div>
    <div class="form-group">
        <label class="form-label" for="marque">Phone</label>
        <input type="number" class="form-control" value="<?= $recupVendeur[0]['phone'] ?>"
               placeholder="Nom" name="phone">
    </div>
    <div class="form-group">
        <label class="form-label" for="price">No Siret</label>
        <input type="number" class="form-control" value="<?= $recupVendeur[0]['noSiret'] ?>"
               placeholder="Mail" name="noSiret">
    </div>
    <div class="form-group">
        <label class="form-label" for="ref">Mail</label>
        <input class="form-control" type="email" value="<?= $recupVendeur[0]['mail'] ?>"
               placeholder="Mot de Passe" name="mail">
    </div>
    <div class="form-group">
        <label class="form-label" for="ref">Mot de Passe</label>
        <input class="form-control" type="password" value="<?= $recupVendeur[0]['password'] ?>"
               placeholder="Mot de Passe" name="password">
    </div>
    <div class="text-center">
        <input type="submit" value="Modfier" class="btn btn-start-order">
    </div>
</form>

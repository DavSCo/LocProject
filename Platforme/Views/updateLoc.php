<?php
require_once ('Views/adminVendeur.php');
?>
<br><br><br>
<form id="contact-form" class="form col-xs-4 col-xs-offset-2" method="POST" role="form">
    <div class="form-group">
        <label class="form-label" for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name"
               value="<?= $selectWithId['name'] ?>">
    </div>
    <div class="form-group">
        <label class="form-label" for="marque">Address</label>
        <input type="text" class="form-control" value="<?= $selectWithId['address'] ?>"
               placeholder="Nom" name="address">
    </div>
    <div class="form-group">
        <label class="form-label" for="price">Area</label>
        <input type="number" class="form-control" value="<?= $selectWithId['area'] ?>"
               placeholder="area" name="area">
    </div>
    <div class="form-group">
        <label class="form-label" for="ref">Price</label>
        <input class="form-control" type="number" value="<?= $selectWithId['price'] ?>"
               placeholder="price" name="price">
    </div>
    <div class="form-group">
        <label class="form-label" for="ref">Time</label>
        <input class="form-control" type="number" value="<?= $selectWithId['time'] ?>"
               placeholder="time" name="time">
    </div>
    <div class="form-group">
        <label class="form-label" for="ref">Description</label>
        <input class="form-control" type="text" value="<?= $selectWithId['description'] ?>"
               placeholder="description" name="description">
    </div>
    <div class="text-center">
        <input type="submit" value="Modfier" class="btn btn-start-order">
    </div>
</form>

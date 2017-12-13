<?php require_once ('Views/Layout.php')?>
<link rel="stylesheet" href="Views/css/rentCss.css">

<!-- multistep form -->
<form id="msform">
    <!-- progressbar -->
    <ul id="progressbar">
        <li class="active">Vos Information</li>
        <li>Payment</li>
        <li>Confirmation</li>
    </ul>
    <!-- fieldsets -->
    <fieldset>
        <h2 class="fs-title">Verifier vos informations</h2>
        <label for="Name">Name</label>
        <input type="text" name="name" value="<?= $updateUsers[0]['name'] ?>" placeholder="name">
        <label for="lastName">Last Name</label>
        <input type="text" name="lastName" value="<?= $updateUsers[0]['lastName'] ?>" placeholder="lastName">
        <label for="mail">Mail</label>
        <input type="email" name="mail" value="<?= $updateUsers[0]['mail'] ?>" placeholder="email">
        <label for="Societe">Nom Societe</label>
        <input type="text" name="nameSoc" value="<?= $updateUsers[0]['nameSoc'] ?>" placeholder="Societe">
        <label for="Siret">SIRET</label>
        <input type="text" name="noSiret" value="<?= $updateUsers[0]['noSiret'] ?>" placeholder="SIRET">
        <label for="phone">Telephone</label>
        <input type="text" name="phone" value="<?= $updateUsers[0]['phone'] ?>" placeholder="phone">
        <input type="button" name="next" class="next action-button" value="Next" />


    </fieldset>
    <fieldset>
        <h2 class="fs-title">Payment</h2>
        <a href="index.php?p=paymentPage&id=<?echo $_GET['id']?>"><input type="button" name="next" class="next action-button" value="Payer" /></a>
    </fieldset>
    <fieldset>
        <h2 class="fs-title">Confirmation</h2>
        <h3 class="fs-subtitle">We will never sell it</h3>
        <input type="text" name="fname" placeholder="First Name" />
        <input type="text" name="lname" placeholder="Last Name" />
        <input type="text" name="phone" placeholder="Phone" />
        <textarea name="address" placeholder="Address"></textarea>
        <input type="button" name="previous" class="previous action-button" value="Previous" />
        <input type="submit" name="submit" class="submit action-button" value="Submit" />
    </fieldset>
</form>


<script src="Views/vendor/jquery/jquery.min.js"></script>
<script src="Views/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="Views/vendor/jquery-easing/jquery.easing.min.js"></script>


<script src="Views/js/progress.js"></script>
<script src="Views/js/payment.js"></script>

</body>

</html>

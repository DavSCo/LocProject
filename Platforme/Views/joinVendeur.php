<?php require_once ('Views/Layout.php')?>

    <div class="login-page">
        <div class="form-wrapper">
            <h1>Créer votre compte</h1>
            <p>Entreprise</p>
            <form class="login-form" method="post" enctype="multipart/form-data">


                <div class="form-item"> <input type="text" name="nameSociety" placeholder="nomSocieté"></div>

                <div class="form-item"> <input type="password" name="password" placeholder="mot de passe"></div>
                <div class="form-item"> <input type="mail" name="mail" placeholder="adresse mail" /></div>
                <div class="form-item"> <input type="number" name="noSiret" placeholder="noSiret"></div>
                <div class="form-item"> <input type="number" name="phone" placeholder="telephone"></div>
                <div class="form-item">
                    <input type="file" name="logo" id="logo">
                </div>
                <div class="button-panel">

                    <input type="submit" class="button" title="Join us" value="S'enregistrer">
                </div>
            </form>
        </div>
    </div>
<?php require_once('Views/footer.php'); ?>
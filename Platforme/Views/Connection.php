<?php require_once ('Views/Layout.php')?>
<div class="form-wrapper">
    <h1>Connexion</h1>

    <form  method="post">
        <input type="radio" name="Categorie" value="Particulier" checked>Particulier


        <input type="radio" name="Categorie" value="Entreprise">Entreprise


        <div class="form-item">

            <label for="email"></label>

            <input type="email" name="mail" required="required" placeholder="Adresse mail">

        </div>
        <div class="form-item">
            <label for="password"></label>

            <input type="password" name="password" required="required" placeholder="Mot de passe">
        </div>
        <div class="button-panel">

            <input type="submit" name="envoi" class="button" title="Sign In" value="Se connecter">
        </div>
    </form>
    <div class="form-footer">

        <p><a href="index.php?p=join">Créer un compte</a></p>
        <p><a href="#">Mot de passe oublié?</a></p>
    </div>
</div>

<?php require_once('Views/footer.php'); ?>
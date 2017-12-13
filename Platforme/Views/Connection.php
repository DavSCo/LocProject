<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Connection</title>
    <link rel="stylesheet" href="Views/css/connection.css">
</head>
<body>

<div class="form-wrapper">
    <h1>Login</h1>

    <form  method="post">
        <input type="radio" name="Categorie" value="Particulier" checked>Particulier


        <input type="radio" name="Categorie" value="Entreprise">Entreprise


        <div class="form-item">

            <label for="email"></label>

            <input type="email" name="mail" required="required" placeholder="mail Address">

        </div>
        <div class="form-item">
            <label for="password"></label>

            <input type="password" name="password" required="required" placeholder="Password">
        </div>
        <div class="button-panel">

            <input type="submit" name="envoi" class="button" title="Sign In" value="LogIn">
        </div>
    </form>
    <div class="form-footer">

        <p><a href="index.php?p=join">Create an account</a></p>
        <p><a href="#">Forgot password?</a></p>
    </div>
</div>

</body>
</html>
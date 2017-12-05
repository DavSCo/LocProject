<?php require_once ('Views/Layout.php')?>


<div class="login-page">
    <div class="form-wrapper"><h1>Sign in</h1>
        <!--    <form class="register-form" method="post" action="traitement-inscription.php">

              <input type="text" name="logo" placeholder="logo">
              <button>create</button>
              <p class="message">not registered? <a href="#">Sign In</a></p>
            </form>-->


        <form class="login-form" method="post">
            <div class="form-item">
                <input type="text" name="name" placeholder="name"></div>
            <div class="form-item"><input type="text" name="lastName" placeholder="lastName"></div>

            <div class="form-item"> <input type="text" name="nameSoc" placeholder="nameSoc"></div>

            <div class="form-item"> <input type="password" name="password" placeholder="password"></div>
            <div class="form-item"> <input type="mail" name="mail" placeholder="email address"/></div>
            <div class="form-item"> <input type="number" name="noSiret" placeholder="noSiret"></div>
            <div class="form-item"> <input type="number" name="phone" placeholder="phone"></div>

            <div class="button-panel">

                <input type="submit" class="button" title="Sign In" value="Sign In">
            </div>


        </form>
    </div>
</div>
</body>

<?php require_once('Views/footer.php'); ?>

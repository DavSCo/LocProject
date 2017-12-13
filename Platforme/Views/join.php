<?php require_once ('Views/Layout.php')?>

    <div class="login-page">
        <div class="form-wrapper">
            <h1>Join us</h1>
            <p> Particulier</p>
            <form class="login-form" method="post" enctype="multipart/form-data">
                <div class="form-item">
                    <input type="text" name="name" placeholder="name"></div>
                <div class="form-item"><input type="text" name="lastName" placeholder="lastName"></div>

                <div class="form-item"> <input type="text" name="nameSoc" placeholder="nameSoc"></div>

                <div class="form-item"> <input type="password" name="password" placeholder="password"></div>
                <div class="form-item"> <input type="mail" name="mail" placeholder="email address" /></div>
                <div class="form-item"> <input type="number" name="noSiret" placeholder="noSiret"></div>
                <div class="form-item"> <input type="number" name="phone" placeholder="phone"></div>
                <div class="form-item">
                    <input type="file" name="logo" id="logo">
                </div>
                <div class="button-panel">

                    <input type="submit" class="button" title="Join us" value="Register">
                </div>
            </form>
<?php require_once('Views/footer.php'); ?>
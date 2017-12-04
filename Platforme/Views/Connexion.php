<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <link rel="stylesheet" href="css/connexion.css">
</head>
<body>
   
   <div class="form-wrapper">
  <h1>Login</h1>
  <form action="traitement-connexion.php" method="post">
    <div class="form-item">
     
      <label for="email"></label>
      
      <input type="email" name="mail" required="required" placeholder="mail Address">
      
    </div>
    <div class="form-item">
      <label for="password"></label>
      
      <input type="password" name="password" required="required" placeholder="Password">
    </div>
    <div class="button-panel">
     
      <input type="submit" class="button" title="Sign In" value="LogIn">
    </div>
  </form>
  <div class="form-footer">
   
    <p><a href="inscription.php">Create an account</a></p>
    <p><a href="#">Forgot password?</a></p>
  </div>
</div>
    
</body>
</html>
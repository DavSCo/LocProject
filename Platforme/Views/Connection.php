<?php require_once ('Views/Layout.php');?>
   
   <div class="form-wrapper">
  <h1>Login</h1>
  <form  method="post">
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
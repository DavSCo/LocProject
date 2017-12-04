<?php

 session_start();

 ini_set('display_errors',1);
 ini_set('error_reporting',E_ALL);

 require('includes/init.php');

  if (!empty($_POST)){
      
        $mail = $_POST['mail'];
        $password=$_POST['password'];
        $passwordcrypt = crypt($_POST['password'], '$2a$07$302838711915bef2db65cc$');
      
        $req = $bdd->prepare("SELECT * FROM users WHERE mail = :mail AND password = :password");
    
        $req->bindValue(":mail",$mail, PDO::PARAM_STR);
        $req->bindValue(":password", $passwordcrypt, PDO::PARAM_STR);
        $req->execute();
        $res = $req->fetch();
      
      
    if ($passwordcrypt == $res['password'])
    {                                                         
        $_SESSION['user'] = 
              [
              'mail' => $mail,
              'id'=> $res['id']
               ];
         
        echo 'Password is valid!';
        header('location:index.php');
      
    }
    else 
    { 
        echo 'Invalid password.'; 
        header('location:index.php');
       
    };
  }

        
?>
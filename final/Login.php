<?php include 'Users.php';
$users = new Users();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="Login.css" type:"text/css" rel="stylesheet">
</head>
</head>
<body>
<div>
<div class="background">
  <div class="transbox">
     <form action="<?php $isLogged = $users->signIn(); ?>" method="post">
    
   <table class="background1">
   <div class="position"><img src="222.png" height="43%" width="60%"></div>
      <tr>
        <td>Username:</td>
        <td><input type="text" name="uname" required></td>
      </tr>
      <tr>
        <td>Password:</td>
        <td><input type="Password" name="password" required></td>
      </tr>
      <tr>
       <td><button type="submit" name="submit-btn" value="Sign In">Sign In</button></td>
       <td> <a href="Newaccount.php" class="Account">Create New Account</a></td>
      </tr>

    </table>
  </form>
  <?php
    if(isset($isLogged)){
        if($isLogged){
            header('location: index.php');
        }
        else{
            echo '<center><h4>Invalid Username or Password!</h4></center>';
        }
    }
    ?>
  </div>
  </div>
<div class="contact">
  Copyright @ university of cambridge No:-The Old Schools, Trinity Ln, Cambridge CB2 1TN, UK <br>Telephone:+44 (0)1223 333308 &nbsp; Fax:+44 (0)1223 746868  &nbsp; Email:admissions@cam.ac.uk
</div>
</div>
</body>
</html>
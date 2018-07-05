
<?php include_once 'Users.php';
$users = new users();
$isSaved = false;
?>
<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" type="text/css" href="Newaccount.css">
	<title>Create New Account</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<script type="text/javascript">
	function validateForm() {
    var x = document.forms["myForm"]["name"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }
       var y = document.forms["myForm"]["uname"].value;
    if (y == "") {
        alert("User Name must be filled out");
        return false;
    }
       var i = document.forms["myForm"]["password"].value;
    if (i == "") {
        alert("Password must be filled out");
        return false;
    }
    var g = document.forms["myForm"]["cpassword"].value;
    if (g!=i) {
        alert("Password must be the same as Confrim Password");
        return false;
    }
    

      var a = document.forms["myForm"]["email"].value;
   if (a=="") {
   	
        alert("Email  must be filled out");
        return false;
  
   }
   var x = document.forms["myForm"]["email"].value;
        var at = x.indexOf("@");
        var dot = x.lastIndexOf(".");
         if (at<1 || dot<at+2 || dot+2>=x.length){
          alert("Not a valid e-mail address");
          document.myForm.email.focus();
          return false;
      }
}
	</script>
</head>
<body>
<div>
   <div class="background">
  <div class="transbox">
     <form name="myForm" action="<?php $isSaved = $users->insert(); ?>" onsubmit="return validateForm()" method="post">
    
   <table class="background1">
   <div class="position"><img src="222.png" height="43%" width="60%"></div>
			<tr>
				<td>Name:</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Username:</td>
				<td><input type="text" name="uname"></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="Password" name="password"></td>
			</tr>
      <tr>
        <td>Confrim your Password:</td>
        <td><input type="Password" name="cpassword"></td>
      </tr>
			<tr>
				<td>Email Address:</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td align="center"><input type="submit" name="Submit"></td>
				<td align="center"><button type="cancel" name="cancel-btn" value="cancel"><a id="sin" href="Login.php">Login</a></button></td></td>
			</tr>

		</table>

	</form>
  <?php
    if(isset($isSaved)){
        if($isSaved){
            echo '<h4 style="color: darkgreen">Registered Successfully!</h4>';
        }
        else{
            echo '<h4 style="color: firebrick">Registration Failed! Email already exists!</h4>';
        }
    }
    ?>
  </div>
  </div>
  </div>
<div class="contact">
 Copyright @ university of cambridge No:-The Old Schools, Trinity Ln, Cambridge CB2 1TN, UK <br>Telephone:+44 (0)1223 333308 &nbsp; Fax:+44 (0)1223 746868  &nbsp; Email:admissions@cam.ac.uk
</div>
</body>
</html>
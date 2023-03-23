<?php

    session_start();
    include "../view/beforeLoginHeader.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<script src="js/login.js"></script>
	<style>
		img{
			border-radius: 25%;
		} 
		
	</style>
	
<link rel="stylesheet" href="../view/css/ovms.css" />
</head>
<body>
<br><br><br>
<p align="center"> <img src="Login.jpg" alt="Login" style="width:200px;height:200px;border: 2px solid black;"></p>
<h1 style="color:slategray;">Voter Login Page</h1><br>
<form action="../controller/loginAction.php" method="POST" novalidate onsubmit="return isValid(this);">

	<fieldset>
			<legend><b><i>Login Credentials</i></b></legend>
			<br>
			<label><strong>Email:</strong></label>
			<input type="email" name="email" required placeholder="someone@gmail.com" required value="<?php if(isset($_COOKIE["email"])) { echo $_COOKIE["email"]; } ?>">
			<?php echo isset($_SESSION['email_error_msg']) ? $_SESSION['email_error_msg'] : ""?>
			<span id="email_error_msg" style="color:red"></span>
			<br> <br>
			<label><strong> Password: </strong></label>
			<input type="password" name="password" required placeholder="#Passw0rd" required value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>">
			<?php echo isset($_SESSION['password_error_msg']) ? $_SESSION['password_error_msg'] : ""?>
			<span id="password_error_msg" style="color:red"></span>
			<br> <br>
			<input type="checkbox" name="remember" /> Remember me
			<br> <br>

			<button class="selectnone" onclick="setTimeout(function()2500);">
      		
      		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><span>Login</span></svg>
    		</button>
    		<a style="color: red;" href="http://localhost/mvc/view/passwordChange.php"> Forgot Password? </a>
			<br><br> 
			<h3 style="color:slategray;"> Not a voter? <a style="color: royalblue;" href="http://localhost/mvc/view/registration.php"> Register here! </a></h3>
			
</fieldset>
</form>
<?php echo isset($_SESSION['global_error_msg']) ? $_SESSION['global_error_msg'] : ""?>
</body>
</html>
<?php
include "footer.php";
?>
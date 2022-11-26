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
</head>
<body>
<p align="middle"><img src="Login.jpg" alt="Login" style="width:200px;height:200px;"></p>
<h1 style="color:slategray;">Voter Login Page</h1>
<form action="../controller/loginAction.php" method="POST" novalidate>

	<fieldset>
			<legend><b><i>Login Credentials</i></b></legend>
			<label><strong>Email:</strong></label>
			<input type="email" name="email" required placeholder="someone@gmail.com">
			<?php if(isset($_COOKIE["email"])) { echo $_COOKIE["email"]; } ?>
			<?php echo isset($_SESSION['email_error_msg']) ? $_SESSION['email_error_msg'] : ""?>
			<br> <br>
			<label><strong> Password: </strong></label>
			<input type="password" name="password" required placeholder="#Passw0rd">
			<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>
			<?php echo isset($_SESSION['password_error_msg']) ? $_SESSION['password_error_msg'] : ""?>
			<br> <br>
			<input type="checkbox" name="remember" /> Remember me
			<br> <br>
			<input  type="submit" style="color:darkgreen;" name="Login"> <a style="color: red;" href="http://localhost/mvc/view/passwordChange.php"> Forgot Password? </a>
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
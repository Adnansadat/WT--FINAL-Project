<?php
include "beforeLoginHeader.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
	<style>
		img {
  				border-radius: 10%;
			}
		body{
  				background: linear-gradient(to Bottom,#ffffff, #e6e6ff,  #d6d6ff);
			}
	
</style>
</head>
<body>
<br>
<a href="../view/registration.php"><h3 align="middle"><img src="reg.jpg" alt="Registration" style="width:500px;height:300px;border: 2px solid slategray;"><br>Registration</h3></a>

<br>
<a href="../view/login.php"><h3 align="middle"><img src="Login.jpg" alt="Login" style="width:400px;height:400px;border: 2px solid slategray;"><br>Login</h3></a>

<br>
<a href="../view/passwordChange.php"><h3 align="middle"><img src="forgotPassword.jpg" alt="forgotPassword" style="width:400px;height:400px; border: 2px solid sl;"><br>Forgot Password</h3></a>

<hr><hr>
</body>
</html>
<?php
include "footer.php";
?>
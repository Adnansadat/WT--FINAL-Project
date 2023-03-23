<?php
include "../view/beforeLoginHeader.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registration Page</title>
	<script src="js/registration.js"></script>
	<style>
		img {
  				border-radius: 30%;
			}
		body{
  				background-color: ;
			}
	
</style>
</head>
<body>
<p align="middle"><img src="reg.jpg" alt="Registration" style="width:300px;height:200px;border: 5px solid limegreen;"></p>
<h1 style="color:slategray;">Registration page</h1>
<form action="../controller/registrationAction.php" method="POST" novalidate onsubmit="return isValid(this);">
			<fieldset>
			<label>First Name:</label>
			<input type="text" name="fname" required placeholder="Firstname">
			<span id="fname_error_msg" style="color:red"></span>
			<br> <br>
			<label>Last Name:</label> 
			<input type="text" name="lname" required placeholder="Lastname">
			<span id="lname_error_msg" style="color:red"></span>
			<br> <br>
			<label>Gender:</label>
			<input type="radio" name="gender" value="male">Male
			<input type="radio" name="gender"  value="female">Female
			<br> <br>
			<label>Email:</label>
			<input type="email" name="email" required placeholder="someone@gmail.com">
			<span id="email_error_msg" style="color:red"></span>
			<br> <br>
			<label><strong> Password: </strong></label>
			<input type="password" name="password" required placeholder="#Passw0rd">
			<span id="password_error_msg" style="color:red"></span>
			<br> <br>
			<label><strong>Confirm Password: </strong></label>
			<input type="password" name="confirmPassword" required placeholder="#Passw0rd">
			<span id="confirmPassword_error_msg" style="color:red"></span>
			<br> <br>
			</fieldset>
			<br> <br>
			<input type="submit" style="color:green;" name="submit" value="Submit">
	</form>

</body>
</html>
<?php
include "footer.php";
?>
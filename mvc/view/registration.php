<?php
include "header.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registration Page</title>
</head>
<body !--style="background-color:LightBlue;"-->

<img src="registration.jpg" alt="Registration" >

<h1 style="color:slategray;">Registration page</h1>
<form action="../controller/registrationAction.php" method="POST" >
			<fieldset>
			<label>First Name:</label>
			<input type="text" name="fname" required placeholder="Firstname">
			<br> <br>
			<label>Last Name:</label> 
			<input type="text" name="lname" required placeholder="Lastname">
			<br> <br>
			<label>Gender:</label>
			<input type="radio" name="gender" value="male">Male
			<input type="radio" name="gender"  value="female">Female
			<br> <br>
			<label>Email:</label>
			<input type="email" name="email" required placeholder="someone@gmail.com">
			<br> <br>
			<label><strong> Password: </strong></label>
			<input type="password" name="password" required placeholder="#Passw0rd">
			<br> <br>
			<label><strong>Confirm Password: </strong></label>
			<input type="password" name="confirmPassword" required placeholder="#Passw0rd">
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
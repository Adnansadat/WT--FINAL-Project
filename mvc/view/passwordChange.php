<?php
include "beforeLoginHeader.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Change password</title>
	<script src="js/changePassword.js"></script>
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
<p align="middle"><img src="forgotPassword.jpg" alt="Forgot Password" style="width:300px;height:300px; border: 5px solid red;"></p>
<h1 style="color:slategray;">Change password</h1>
<form action="../controller/PasswordChangeAction.php" method="POST" novalidate onsubmit="return isValid(this);">
	<fieldset>
			<legend><b><i>Change Password</i></b></legend>
			<label><strong> Email: </strong></label>
			<input type="email" name="email" required placeholder="someone@email.com">
			<span id="email_error_msg" style="color:red"></span>
			<br> <br>
			<label><strong> Currnet Password: </strong></label>
			<input type="password" name="currentPassword" required placeholder="#Passw0rd">
			<span id="email_error_msg" style="color:red"></span>
			<br> <br>
			<label><strong> New password: </strong></label>
			<input type="password" name="newPassword" required placeholder="#Passw0rd">
			<span id="newPassword_error_msg" style="color:red"></span>
			<br> <br>
			<label><strong> Re-type password: </strong></label>
			<input type="password" name="reTypePassword" required placeholder="#Passw0rd">
			<span id="reTypePassword_error_msg" style="color:red"></span>
			<br> <br>
			<input type="submit" style="color:red;" name="changePassword" value="Change Password">
			<br> <br>
			</fieldset>
			<br> <br>
			
	</form>

</body>
</html>
<?php
include "footer.php";
?>
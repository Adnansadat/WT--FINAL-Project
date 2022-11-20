<?php
include "header.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Change password</title>
</head>
<body !--style="background-color:LightBlue;"-->
<h1 style="color:slategray;">Change password</h1>
<form action="PasswordChangeAction.php" method="POST" !--novalidate-->
	<fieldset>
			<legend><b><i>Change Password</i></b></legend>
			<label><strong> Email: </strong></label>
			<input type="email" name="email" required placeholder="someone@email.com">
			<br> <br>
			<label><strong> Currnet Password: </strong></label>
			<input type="password" name="currentPassword" required placeholder="#Passw0rd">
			<br> <br>
			<label><strong> New password: </strong></label>
			<input type="password" name="newPassword" required placeholder="#Passw0rd">
			<br> <br>
			<label><strong> Re-type password: </strong></label>
			<input type="password" name="reTypePassword" required placeholder="#Passw0rd">
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
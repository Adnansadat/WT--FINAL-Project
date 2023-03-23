<?php
include "header.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Update Profile</title>
	<script src="js/updateProfile.js"></script>
</head>
<body !--style="background-color:LightBlue;"-->
<h1 style="color:slategray;">Update Profile</h1>
<form action="../controller/updateProfileAction.php" method="POST" novalidate onsubmit="return isValid(this);">
			<label>First Name:</label>
			<input type="text" name="fname" required placeholder="Firstname">
			<span id="fname_error_msg" style="color:red"></span>
			<br> <br>
			<label>Last Name:</label> 
			<input type="text" name="lname" required placeholder="Lastname">
			<span id="lname_error_msg" style="color:red"></span>
			<br> <br>
			<input type="file">
			<br> <br>
			<label>Address Line 1</label>
			<br>
			<textarea id="addressLine1" name="addressLine">
			</textarea>
			<br> <br>
			<label>District</label>
			<select name="district">
				<option value="Tangail">Tangail</option>
				<option value="Dhaka">Dhaka</option>
				<option value="Netrokona">Netrokona</option>
				<option value="Mymensingh">Mymensingh</option>
			</select>
			<br> <br>
			<label>Division</label>
			<select name="division">
				<option value="Dhaka">Dhaka</option>
				<option value="Barishal">Barishal</option>
				<option value="Chittagong">Chittagong</option>
				<option value="Khulna">Khulna</option>
				<option value="Rajshahi">Rajshahi</option>
				<option value="Rangpur">Rangpur</option>
				<option value="Mymensingh">Mymensingh</option>
				<option value="Sylhet">Sylhet</option>
			</select>
			<br> <br>
			<label>Postcode</label> 
			<input type="text" name="postcode" required placeholder="1903">
			<span id="postcode" style="color:red"></span>
			<br> <br>
			<label>Country</label>
			<select name="country">
				<option value="Bangladesh">Bangladesh</option>
				<option value="USA">USA</option>
				<option value="London">London</option>
				<option value="Germany">Germany</option>
			</select>
			<br> <br>
			<label><strong>Email:</strong></label>
			<input type="email" name="email" required placeholder="someone@gmail.com">
			<?php echo isset($_SESSION['email_error_msg']) ? $_SESSION['email_error_msg'] : ""?>
			<span id="email_error_msg" style="color:red"></span>
			<br> <br>
			<label><strong> Password: </strong></label>
			<input type="password" name="password" required placeholder="#Passw0rd">
			<?php echo isset($_SESSION['password_error_msg']) ? $_SESSION['password_error_msg'] : ""?>
			<span id="password_error_msg" style="color:red"></span>
			<br> <br>
			<input type="submit" style="color:red;" name="update" value="Update">
</form>
</body>
</html>
<?php
include "footer.php";
?>
<?php
session_start();
include "header.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Profile</title>
</head>
<body !--style="background-color:LightBlue;"-->
<h1 style="color:slategray;">Profile</h1>
<form action="../controller/ProfileAction.php" method="POST" novalidate>
			<label>First Name:</label>
			<input type="text" name="fname" required placeholder="Firstname">
			<br> <br>
			<label>Last Name:</label> 
			<input type="text" name="lname" required placeholder="Lastname">
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
			<br> <br>
			<label>Country</label>
			<select name="country">
				<option value="Bangladesh">Bangladesh</option>
				<option value="USA">USA</option>
				<option value="London">London</option>
				<option value="Germany">Germany</option>
			</select>
			<br> <br>
			<label><strong> Password: </strong></label>
			<input type="password" name="password" required placeholder="#Passw0rd">
			<?php echo isset($_SESSION['password_error_msg']) ? $_SESSION['password_error_msg'] : ""?>
			<br> <br>
			<input type="submit" style="color:red;" name="update" value="Update">
</form>
</body>
</html>
<?php
include "footer.php";
?>
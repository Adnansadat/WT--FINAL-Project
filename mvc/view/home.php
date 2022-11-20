<?php
	session_start();

	if (!isset($_SESSION['email']))
	{
		header("Location: login.php");
	}

	include "header.php";

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
</head>
<body>

	<h1>Welcome</h1>
	<img src="profile.jpg" alt="Profile" style="width:150px;height:150px;">
	<a href="http://localhost/mvc/view/profile.php"><hr><hr>Profile</a>
	<br><br>

	<img src="vote.jpg" alt="Vote" style="width:200px;height:200px;">
	<a href="http://localhost/mvc/view/voteCast.php"><hr><hr>Vote Cast</a>
	<br><br>

	<img src="logout.jpg" alt="Logout" style="width:150px;height:150px;">
	<a href="../controller/logoutAction.php"><hr><hr>Logout</a>
	<br><br>


</body>
</html>
<?php
include "footer.php";
?>
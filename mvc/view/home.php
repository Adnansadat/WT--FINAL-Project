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

	<h1 style="color: forestgreen;" align="middle">Welcome</h1>
	
	<h3>
	<p align="middle">
	<img src="profile.jpg" alt="Profile" style="width:50px;height:50px;">
	<br>
	<a style="color: orchid;" href="http://localhost/mvc/view/profile.php">Profile</a>
	</p>
	</h3>
	
	<h3>
	<p align="middle">
	<img src="vote.jpg" alt="Vote" style="width:70px;height:70px;">
	<br>
	<a style="color: royalblue;" href="http://localhost/mvc/view/voteCast.php">Vote Cast</a>
	</p>
	</h3>
	
	<h3>
	<p align="middle">
	<img src="logout.jpg" alt="Logout" style="width:50px;height:50px;">
	<br>
	<a style="color: red;" href="../controller/logoutAction.php">Logout</a>
	</p>
	</h3>
	
</body>
</html>
<?php
include "footer.php";
?>
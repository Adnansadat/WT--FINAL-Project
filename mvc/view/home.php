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
	<style>
		img {
  				border-radius: 20%;
			}
		body{
  				background-color: ;
			}
	
</style>
</head>
<body>

	<h1 style="color: forestgreen;" align="middle">Welcome <h2 align="middle">"Sadat, Adnan"</h2></h1>
	
	<h3>
	<p align="middle">
	<img src="profile.jpg" alt="Profile" style="width:60px;height:60px;border: 4px solid green;">
	<br>
	<a style="color: orchid;" href="http://localhost/mvc/view/profile.php">Profile</a>
	</p>
	</h3>
	
	<h3>
	<p align="middle">
	<img src="vote.jpg" alt="Vote" style="width:60px;height:60px;border: 4px solid royalblue;">
	<br>
	<a style="color: royalblue;" href="http://localhost/mvc/view/voteCast.php">Vote Cast</a>
	</p>
	</h3>
	
	<h3>
	<p align="middle">
	<img src="logout.jpg" alt="Logout" style="width:60px;height:60px;border: 4px solid red;"">
	<br>
	<a style="color: red;" href="../controller/logoutAction.php">Logout</a>
	</p>
	</h3>
	
</body>
</html>
<?php
include "footer.php";
?>
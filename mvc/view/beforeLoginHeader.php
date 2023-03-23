<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
<link rel="stylesheet" href="../view/css/beforeloginheader.css">

	<style type='text/css'>
.avatar {
  vertical-align: middle;
  width: 50px;
  height: 50px;
  border-radius: 50%;
}
div.cont {<!--from  w w w .  j a v  a 2  s.  com-->
  text-align: center;
  line-height: 40px;
}

.cont img, .cont input {
  vertical-align: middle;
}

</style>
</head>
<body>
<form action="../controller/search.php" method="" onsubmit="return search(this);">
<!-- <h1 style="color:royalblue;" align="middle">Online Voting System</h1> -->
<!-- <fieldset style="border: 3px solid #F37622;"> -->
<nav>
<label class="logo"><img src="ovms.jpg" alt="ovms logo" style="width:70px;height:70px;" class="avatar">OVMS</label>
<ul>
<li><a href="../view/ovms.php">Home</a></li>
<li><a href="../view/registration.php">Registration</a>
</li>
<li>
<a href="../view/login.php">Login</a>
</li>
<li>
<a href="../view/help.php">Help</a>
</li>
</ul>
</nav>
<br>
<div class="cont">
<p align="right">

<input type="search" name="email" id="search">
<a href="../controller/search.php"><img src="search.jpg" alt="search button" style="width:50px;height:45px;"></a>
<!-- <input type="submit" name="submit" value="Search"> -->
</p>
</div>
</fieldset>
</form>
</body>
</html>





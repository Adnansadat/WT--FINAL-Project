<?php 

	function connect() {
		$hostname = "localhost";
		$username = "root";
		$password = "";
		$dbname = "ovms";
		$print = "Connection Success";
		$conn = mysqli_connect($hostname, $username, $password, $dbname);
		if($conn)
		{
			echo "$print";
		}

		return $conn;
	}
?>
<?php
    include "header.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<form action="../controller/logoutAction.php" method="POST" novalidate>
<?php
header("Location: ../view/ovms.php");
?>
</body>
</html>
<?php
    include "footer.php";
?>
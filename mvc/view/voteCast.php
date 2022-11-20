<?php
include "header.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Vote Cast</title>
</head>
<body>
<fieldset>
<form action="../controller/voteCastAction.php" method="POST">
  <label for="ballot">Select logo from ballot:</label>
  <br><br>
  <select id="logo" name="logo" size="2">
    <option value="mango">Mango</option>
    <option value="pineapple">Pineapple</option>
    <option value="jackfruit">Jackfruit</option>
    <option value="parrot">Parrot</option>
  </select><br><br>
  <input type="submit">
</form>
</fieldset>

</body>
</html>

<?php
include "footer.php";
?>
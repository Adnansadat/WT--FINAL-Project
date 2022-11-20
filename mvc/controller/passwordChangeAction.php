<?php
$email = $currentPassword = $newPassword = $reTypePassword = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  $email = test_input($_POST["email"]);
  $currentPassword = test_input($_POST["currentPassword"]);
  $newPassword = test_input($_POST["newPassword"]);
  $reTypePassword = test_input($_POST["reTypePassword"]);

  echo "Data sent. Password Changed..!";
  
}

function test_input($data) 
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
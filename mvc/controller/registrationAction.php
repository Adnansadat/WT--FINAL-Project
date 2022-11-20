<?php
session_start();

$fname = $lname = $gender = $email = $password = $confirmPassword = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") 
{
  $fname = sanitize($_POST["fname"]);
  $lname = sanitize($_POST["lname"]);
  $email = sanitize($_POST["email"]);
  $password = sanitize($_POST["password"]);
  $confirmPassword = sanitize($_POST["confirmPassword"]);
  
  $file = fopen("../model/users.json", "a");

  $content = array(array("fname" => $fname, "lname" => $lname, "email" => $email, "password" => $password));

  $content = json_encode($content);
    fwrite($file, $content);
  header("Location: ../view/registrationSuccessful.php");
  
}

function sanitize($data) 
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
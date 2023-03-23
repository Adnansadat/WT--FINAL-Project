<?php

    session_start();
    $_SESSION['email'] = $_POST["email"]; 

$email = $password = "";

if(isset($_POST["remember"])) {
  setcookie ("email",$_POST["email"],time()+ 3600, "/");
  setcookie ("password",$_POST["password"],time()+ 3600, "/");
} 
else {
  setcookie("email","");
  setcookie("password","");
  echo "Cookies Not Set";
}


if ($_SERVER["REQUEST_METHOD"] === "POST") 
{
    $email = sanitize($_POST["email"]);
    $password = sanitize($_POST["password"]);

    $isValid = true;

    if (empty($email))
      {
        $_SESSION['email_error_msg'] = "Email can not be empty";
        $isValid = false;
      }

    if (empty($password))
      {
        $_SESSION['password_error_msg'] = "password can not be empty";
        $isValid = false;
      }

    if ($isValid === true)
      {
        $_SESSION['email_error_msg'] = "";
        $_SESSION['password_error_msg'] = "";

        $filename = "../model/users.json";
        $file = fopen($filename, "r");
        $fz = filesize($filename);
        if ($fz > 0)
        {
          $fr = fread($file, $fz);
          $users = json_decode($fr);
          $found = false;

          for($i = 0; $i < count($users); $i++)
          {
            if ($users[$i]->email === $email and $users[$i]->password === $password)
            {
              $found = true;
              break;
            }
          }
          if ($found === true)
          {
            $_SESSION['email'] = $email;
            header("Location: ../view/home.php");
          }
          else
          {
            $_SESSION['global_error_msg'] = "Email or password does not match";
            header("Location: ../view/login.php");
          }
        }

        else
        {
          $_SESSION['global_error_msg'] = "Something wrong happend. Please contact with the administrator!";
        }
        fclose($file);
        
      }

    else
      {
        header("Location: ../view/login.php");
      }
   
}


function sanitize($data) 
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
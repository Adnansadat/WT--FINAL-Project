<?php 

	if ($_SERVER["REQUEST_METHOD"] === "GET") 
	{
				if ($isValid === true)
      		{
			        $filename = "../model/voterList.json";
			        $file = fopen($filename, "r");
			        $fz = filesize($filename);
			        if ($fz > 0)
			        {
			          $fr = fread($file, $fz);
			          $users = json_decode($fr);
			          $found = false;

			          for($i = 0; $i < count($users); $i++)
			          {
			            if ($users[$i]->email === $email)
			            {
			              $found = true;
			              break;
			            }
			          }
			        }

			       fclose($file);
        
      		}
         
		echo json_encode(array);
	}

	function sanitize($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
?>
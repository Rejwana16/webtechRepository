<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>registration Action</title>
</head>
<body>
	<center>
		<?php

		if($_SERVER['REQUEST_METHOD'] === "POST")
		{
			$username = $_POST['username'];
			$password = $_POST['password'];
			if($username === "" || $password === "")
		{
			echo "Your Username & password Can not be empty";
			
		}
		  else
		  {
			$filename = "data.json";
			$username = $_POST['username'];

			$password = $_POST['password'];

			$handle = fopen($filename, "a");
			$res = fwrite($handle, json_encode(array( 'username'=>$username ,'password'=>$password )) . "\n");
			if($res) 
			{
				echo "Your Registraion is Successful";
			}
			else
		    {
		    	echo "Your Registraion is FAILED";
			}
		  }
		}



         
	?>	
		<script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
	<h3> already registered?   Click for <a href="http://localhost/project/Login.php">Login</a>  | <a href="http://localhost/project/Registration.php">New Registration</a>
	</h3>
	</center>

	
	

</body>
</html>
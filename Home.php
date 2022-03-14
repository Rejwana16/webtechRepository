<?php 
	session_start();
	if (count($_SESSION)===0) 
	{
		header("Location: Logout.php");
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>hello</title>
</head>
<?php include('Header.php') ?>

<body>
	<body>
<center>
<a href="http://localhost/project/Login.php">BACK</a>
<br><br>

<a href="http://localhost/project/schedule.php">MY SCHEDULE</a>
<br><br>
<a href="http://localhost/project/package.php">PACKAGE INFORMATION</a>

</center>
</body>
</html>
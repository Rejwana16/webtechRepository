<?php


session_start(); 
if(empty($_SESSION["username"])) 
{
header("Location:login.php"); 
}
else
{
    $cookie_value=$_SESSION["username"];
}
$cookie_name = "User";

setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/mycss.css">
</head>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
echo "Cookie '" . $cookie_name . "' is set!<br>";
echo "Value is: " . $_COOKIE[$cookie_name];
}
?>

<div class="content">
<h1> <p id="p">  WELCOME TO OUR WEBSITE  </p> </h1> 
</div>
<div class="content3">
    <h2>User Dashboard</h2> <br> 
</div>
<div class="content4">

<a href="profile.php"> <input name="profile" type="submit" id="click" value=" PROFILE "> </a>
<br> <br>

<a href="trainer.php"> <input name="services" type="submit" id="click" value="TRAINER"> </a>
<br> <br>

<a href="../control/logout.php"> <input name="logOut" type="submit" id="click" value="LOG OUT"> </a>
<br>
<br>
</div>
</body>
</html>

<?php


?>   
<?php include('../control/trainerControl.php'); 
if(!isset($_SESSION['username']))
{
  header("location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<script src="../js/myjs.js"> </script>
<link rel="stylesheet" type="text/css" href="../css/mycss.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
<div class="content2"> 
<button id="sh">SEARCH TRAINER</button> 
<script>  $("#sh").click(function(){
    $("#search").toggle();

  });
</script>

  <div1 id="search">
<form action="" onsubmit="return validateLocation()" method="post" enctype="multipart/form-data" >
<h3> Search Trainer </h3>
Enter Name <input type="text" id="tname" name="tname" placeholder="Enter trainer name" onkeyup="Trainer()">
</form>
</div1>
<br>
<h3 id="trainerInfo"> </h3>


<br>
<a href="user.php"> <input name="homePage" type="submit" id="click" value="HOME PAGE"> </a>

<br>
</div>
</body>
</html>
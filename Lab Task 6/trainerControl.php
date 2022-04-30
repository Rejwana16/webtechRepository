<?php
include('../model/database.php');

$data=$user="";

session_start(); 
if(empty($_SESSION["username"])) 
{
header("Location:login.php"); 
}
else
{
    $user=$_SESSION["username"];
}

if (isset($_POST['view']))
{

$connection = new db();
$conobj=$connection->OpenCon();
$userQuery=$connection->ShowAll($conobj,"trainer");

if ($userQuery->num_rows > 0)
 {
    echo "<table border=5><tr><th>NAME</th><th>AGE</th><th>EXPERIENCE</th><th>CONTACT</th><th>RATING</th></tr>";
    while($row = $userQuery->fetch_assoc()) 
    {
      echo "<tr><td>".$row["name"]."</td><td>".$row["age"]."</td><td>".$row["experience"]."</td><td>".$row["contact"]."</td><td>".$row["rating"]."</td></tr>";
    }
    echo "</table>";
  } 
  else 
  {
    echo "No data Found";
  }
$connection->CloseCon($conobj);
}

?>
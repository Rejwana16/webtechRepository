<?php
include('../model/database.php');

if (empty($_REQUEST["checkTrainer"]))
{
    echo "Enter trainer name please!!!";
}
else
{
    $connection = new db();
    $conobj=$connection->OpenCon();
    $userQuery=$connection->CheckTrainer($conobj,"trainer",$_REQUEST["checkTrainer"]);
    $rows=$userQuery->num_rows;
    if ($rows > 0)
    {
        echo "<table border=5><tr><th>Name</th><th>Age</th><th>Experience</th><th>Contact no</th><th>Rating</th></tr>";
        while($row = $userQuery->fetch_assoc()) 
        {
            echo "<tr><td>".$row["name"]."</td><td>".$row["age"]."</td><td>".$row["experience"]."</td><td>".$row["contact"]."</td><td>".$row["rating"]."</td></tr>";
        }
        echo "</table>";
    }
    else
    {
        echo "No trainer found.";
    }
    $connection->CloseCon($conobj);
}
?>
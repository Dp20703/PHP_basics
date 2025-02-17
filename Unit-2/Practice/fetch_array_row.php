<?php

$con=mysqli_connect("localhost","root","","University");

if(!$con)
{
echo "Failed to connect to MySQL: ".mysqli_connect_error();
exit();
}

$query=mysqli_query($con,"Select * from student");

echo("Query Executed Successfully")."<br>";

$row=mysqli_fetch_row($query);
print_r($row);

echo "<br> Value of index 0:".$row[0];
echo "<br> Value of index 1:".$row[1];


mysqli_close($con);
?>
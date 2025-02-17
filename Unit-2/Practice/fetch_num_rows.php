<?php

$con=mysqli_connect("localhost","root","","University");

if(!$con)
{
echo "Failed to connect to MySQL: ".mysqli_connect_error();
exit();
}

else
{

$query=mysqli_query($con,"select * from student");
echo "Query execute successfully <br>";

$row=mysqli_num_rows($query);
print_r($row);
echo "<br>values of Student Table: ".$row;
}
mysqli_close($con);
?>
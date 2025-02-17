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

if($query)
{
echo "Query execute successfully";
}
else
{
echo "Query has some proble";
}
}
mysqli_close($con);
?>
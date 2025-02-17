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
echo "Query execute successfully"."<br>";

$row=mysqli_fetch_assoc($query);

print_r($row);
echo "<br>Value of Student_id:".$row['Student_ID'];
echo "<br>Value of Full name:".$row['Fullname'];
}
mysqli_close($con);
?>
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
echo "Query execute successfully";

$row=mysqli_fetch_array($query);
print_r($row);
echo "<br>value of fild 1:".$row[0];
echo "<br>Value of Student_id:".$row['Student_ID'];
echo "<br>Value of Full name:".$row['Fullname'];
}
mysqli_close($con);
?>
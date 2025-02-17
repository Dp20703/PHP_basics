<?php
// method 1 
// $con=mysqli_connect("localhost","root",""); 

// method 2
$host='localhost';
$username='root';
$password="";
//$database="";

//method 3
//$host="127.0.0.1";

$con=mysqli_connect($host,$username,$password);
if(!$con)
{
echo "Failed to connect to with MySQL: ".mysqli.connect_error();
exit();
}
else{
echo "Connection success....";
exit();
}
mysqli_close($con);


?>
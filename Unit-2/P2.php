<?php
//For connecting with mysql:
include("con.php");

//Database Create query:
$db_create="Create database db1";
$qry=mysqli_query($con,$db_create);
if($qry){
echo "Database created Successfully";
}
else
{
echo "Database not created!";
}
?>

<?php
Session_start();
if(isset($_SESSION["username"])&&isset($_SESSION["mobile"]))
{
$user=$_SESSION["username"];
$mobile=$_SESSION["mobile"];
echo "your username is $user"."<br>";
echo "your mobile no is $mobile";
}
else{
echo "your session variables are deleted..";
}
?>
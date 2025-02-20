<!doctype html>
<html>
<head>
<title>Form data P1(2) </title>
</head>
<body>
<?php
$name=$_GET["uname"];
$pass=$_GET["pass"];

if($name=="" || $pass=="")
{
echo "Please enter username and password";
}
else
{
echo "welcome".$name;
echo "<br> Password:".$pass;
}
?>
</body>
</html>
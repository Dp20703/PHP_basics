<!doctype html>
<html>
<head>
<title>Form data P1(2) </title>
</head>
<body>
<?php
$name=$_GET["uname"];


if($name=="")
{
echo "Please enter Username";
}
else
{
echo "welcome ".$name;

}
?>
</body>
</html>
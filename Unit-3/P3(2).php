<!doctype html>
<html>
<head>
<title>Form data P3(2) </title>
</head>
<body>
<?php
$name=$_GET["n"];


if($name=="")
{
echo "Please enter Username";
}
else
{
echo strtoupper($name);

}
?>
</body>
</html>
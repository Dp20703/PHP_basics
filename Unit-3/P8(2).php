<! doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Program 8 page 2</title>
</head>
<body>
<?php
include("connect.php");

$name=$_GET["fname"];
$contact=$_GET["contact"];
$email=$_GET["email"];
$address=$_GET["address"];

$select="select Email from student where Email='$email'";
$res=mysqli_query($con,$select);
$row=mysqli_num_rows($res);

if($row>0)
{
echo "$email already exist!";
}
else
{
$q="insert into student(Stud_id,FullName,Contactno,Email,Address) values('','$name','$contact','$email','$address')";
$inq=mysqli_query($con,$q);
	if($inq)
	{
	//header("Location:index.php?msg=Record Inserted Successfully..!");
	echo "Record Inserted Successfully!";
	}
}
?>
</body>
</html>

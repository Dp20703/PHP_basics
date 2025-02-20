<!doctype html>
<html>
<head>
<title>P4(2) page 2</title>
</head>
<body>

<?php 
include("connect.php");
$pname=$_GET["n"];

	if(!$pname=="")
	{

	$sel="select * from product where pro_name like '".$pname."'";
	$query=mysqli_query($con,$sel);
	$num=mysqli_num_rows($query);

		if($num>0)
		{
 			echo "<table width=100% border=1>
			<tr>
			<th>Product id </th>
			<th>Product Name</th>
			<th>Product price </th>
			<th>Product Quantity </th>
			</tr>
			";
			while($row=mysqli_fetch_array($query))
			{		
			echo "<tr>
			<td>$row[pro_id]</td>
			<td>$row[pro_name]</td>
			<td>$row[pro_price]</td>
			<td>$row[qoh]</td>
			</tr>";
			}
			echo "</table>";
		}
		else
		{
		echo "Product not found!";
		}
	}
	else
	{
	echo "Please try again!";
	}
?>
</body>
</html>
<?php
include("con.php");

$sel_qry="select * from product";
$res=mysqli_query($con,$sel_qry);

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Product Records </title>
</head>
<body>

<h3  style="width: 50%; margin: auto; padding:5px; text-align: center; font-size: 20px;"><a href="P4(1).php">+Add Product</a></h3>

<table border='1' style="width: 50%; margin: auto; text-align: center; font-size: 20px; border-collapse: collapse;">
<tr bgcolor="#6699FF">
<th>Product Id</th>
<th>Product Name</th>
<th>Product Price </th>
<th>Product Quantity</th>
<th>Edit </th>
</tr>

<?php
while($row=mysqli_fetch_array($res))
{
?>
<tr bgcolor="#FFCC33">
<td><?php echo $row["pro_id"]; ?> </td>
<td><?php  echo $row["pro_name"]; ?> </td>
<td><?php  echo $row["pro_price"]; ?> </td>
<td><?php  echo $row["qoh"]; ?> </td>
<td><?php echo  "<a href=P6(1).php?pid=$row[pro_id] style=text-decoration:none> Edit </a>" ?> </td>
</tr>

<?php
}
?>
</table>

</body>
</html>
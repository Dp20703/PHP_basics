<?php
include("con.php");
if(!empty($_POST["search_product"]))
{
$search=$_POST["search_product"];
$sel_qry="select * from product where pro_id=$search";
$res=mysqli_query($con,$sel_qry);
}
else
{
$sel_qry="select * from product ";
$res=mysqli_query($con,$sel_qry);
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Product Details by Product Id  </title>
</head>
<body>

<div style="float:left; widht:150px;">
<h3><a href="P4(1).php">+Add New Records</a></h3>
</div>

<div style="float:right;width:150px;margin-right:100px;">
<form action="<?php $_SERVER["PHP_SELF"]; ?>" method="post">
<table>
<tr>
	<td>
		<select name="search_product">
		<option value="">Please Select </option>
			<?php 
			$sel_qry_search="select * from product";
			$res_search=mysqli_query($con,$sel_qry_search);
			while($row_search=mysqli_fetch_array($res_search))
			{
			?>
		<option value="<?php echo $row_search["pro_id"];?>">
			<?php echo $row_search["pro_name"];?>
		</option>
			<?php
			}
			?>
		</select>
	</td>
	<td>
		<input type="submit" name="submit" value="search">
	</td>
</tr>
</table>
</form>
</div>

<div style="margin-top:50px;margin-left:200px;float:left;">
<table border="1">
<caption style="margin-bottom:5px;"><b >Product Detatails </b></caption>
<tr bgcolor="#6699FF">
	<th>Product Id </th>
	<th>Product Name </th>
	<th>Product Price </th>
	<th>Product Quantity</th>
	<th>Edit </th>
	<th>Delete</th>
</tr>
	<?php 
	while($row=mysqli_fetch_array($res))
	{
	?>
<tr bgcolor="#FFCC33">
	<td><?php echo $row["pro_id"]; ?> </td>
	<td><?php echo $row["pro_name"]; ?> </td>
	<td><?php echo $row["pro_price"]; ?> </td>
	<td><?php echo $row["qoh"]; ?> </td>
	<td><?php echo  "<a href=P6(1).php?pid=$row[pro_id] style=text-decoration:none> Edit </a>" ?> </td>
	<td><?php echo  "<a href=P7(2).php?pid=$row[pro_id] style=text-decoration:none> Delete </a>" ?> </td>


</tr>
	<?php
	}
	?>
</table>
</div>
</body>
</html>

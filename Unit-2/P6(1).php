<?php
include("con.php");
$pro_id=$_GET["pid"]; //this id is come from product_record.php page (P4(3).php)


//get the details of product id and qantity using pid from product_record page
$sel_product="select * from product where pro_id=$pro_id";
$res_product=mysqli_query($con,$sel_product);
$row_product=mysqli_fetch_array($res_product);

//store the pid and qty:
$pid=$row_product["pro_id"];
$qty=$row_product["qoh"];

if(isset($_GET["msg"]))
{
echo $_GET["msg"];
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Product Details by Product Id </title>
</head>
<body>

<form action="P6(2).php" method="post">
<table>
	<caption><b>Product Update</b></caption>
	<tr>
		<td><label for="product">Product Name </label></td>
		<td>
		<select name="pro_id">
			<option value="">Please Select </option>
			<?php
			$sel_product="select * from product order by Pro_name ASC";
			$qry=mysqli_query($con,$sel_product);
			while($row_search=mysqli_fetch_array($qry))
			{
			?>

			<option value="<?php echo $row_search["pro_id"]; ?>" 
			<?php
				if($row_search["pro_id"]==$pid)
				{
				echo "Selected";
				}
				else
				{ 
				echo "";
				}
			?>
			>
			<?php echo $row_search["pro_name"];?>
			</option>
			<?php
			}
			?>
		</select>
		</td>
	</tr>
	<tr>
		<td><label for="quantity">Quantity</label></td>
		<td>
			<input type="number" name="qoh" value="<?php echo $qty;?>">
	 	</td>
	</tr>
	<tr>
		<td colspan="2">
				<input type="submit" name="Submit" value="Submit">
				<input type="reset" name="reset" value="reset" >
		</td>
	</tr>			
</table>
</form>
</body>
</html>
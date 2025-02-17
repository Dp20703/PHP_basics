<?php
if(isset($_GET["msg"]))
{
echo $_GET["msg"];
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Product Input Details </title>
</head>
<body>
<form action="P4(2).php" method="post">
<table border='1' style="width: 50%; margin: auto; text-align: center; font-size: 20px; border-collapse: collapse;">
<caption><b>Add Product</b></caption>
<tr>
<td><label for="Pro_name">Product name </label></td>
<td><input type="text" name="Pro_name"</td>
</tr>
<tr>
<td><label for="Pro_price">Price </label></td>
<td><input type="number" name="Pro_price" step="0.01"></td>
</tr>
<td><label for="QOH">Quantity </label></td>
<td><input type="number" name="QOH"></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="Submit" value="Submit">
<input type="reset" name="reset" value="reset"></td>
</tr>
</table>
</form>
</body>
</html>
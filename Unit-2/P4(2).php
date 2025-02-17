<?php
include("con.php");

$productname=$_POST["Pro_name"];
$productprice=$_POST["Pro_price"];
$qoh=$_POST["QOH"];

if(!empty($productname) && !empty($productprice) && !empty($qoh))
{
$ins_qry="insert into product(pro_name,pro_price,qoh) values('$productname','$productprice','$qoh')";
$res=mysqli_query($con,$ins_qry);

if($res)
{
echo "Insertion Completed";
header("location:P4(3).php");
}
else
{
echo "Insertion Failed!";
header("location:P4(1).php?msg=Please try again!");
}
}

?>
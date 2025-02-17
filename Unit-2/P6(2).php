<?php
include("con.php");
echo $pro_id=$_POST["pro_id"];
echo $qoh=$_POST["qoh"];

if(!empty($qoh))
{
 $update_qry="update product set qoh=$qoh where pro_id=$pro_id";
$update_res=mysqli_query($con,$update_qry);

if($update_res)
{
header("location:P4(3).php");
}
}
else
{
header("location:P6(1).php?msg=please try again!");
}

?>
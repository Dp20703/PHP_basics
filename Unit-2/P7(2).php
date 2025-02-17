<?php
include("con.php");
echo $pro_id=$_GET["pid"]; //come from P7(1) page  the product records page:


if(!empty($pro_id))
{
 $delete_qry="delete from product  where pro_id=$pro_id";
$delete_res=mysqli_query($con,$delete_qry);

if($delete_res)
{
header("location:P7(1).php");
}
}
else
{
header("location:P7(2).php?msg=please try again!");
}

?>
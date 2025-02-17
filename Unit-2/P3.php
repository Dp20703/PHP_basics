<?Php
include("con.php");
$tb_create="create table product(pro_id int(3) unsigned auto_increment primary key, pro_name varchar(100) not null, pro_price float(7,2) not null, qoh int(5) not null)";
$qry=mysqli_query($con,$tb_create);

if($qry)
{
echo "Product table created Successfully";
}
else
{
echo "Product table not created";
}
?>
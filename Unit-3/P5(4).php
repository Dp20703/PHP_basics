<?php
$r=$_GET["checkselect"];
$str=explode(" ",$r);

for($i=0;$i<count($str);$i++)
{
	echo "<br>".$str[$i]."<br>";
}
if($r==" ")
{
echo "You have not selected any item";
}
else
{
echo "You have selected <span style=color:red;>".$r."</span>";
}
?>
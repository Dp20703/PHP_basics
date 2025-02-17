<?php
//join string:
$arr=array("hello","kese ho","aap log");
echo join(" ",$arr)."<br>";	
echo implode(" ",$arr);	

$str="hello students kese ho app log"."<br>";
$arr=explode(" ",$str);
print_r($arr);
echo $arr[0];
?>
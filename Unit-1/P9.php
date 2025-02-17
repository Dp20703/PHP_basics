<!doctype html>
<html>
<head>
<meta charset='utf-8'>
<title>Program 9</title>
</head>
<body>
<?php
$arr=array(11,4,23,3,12,59,2,34);
echo nl2br("\n Before sorting array\n");
for($i=0;$i<count($arr);$i++){
echo "arr[$i]=".$arr[$i]."<br>";
}
 
for($i=0;$i<count($arr);$i++){
for($j=$i+1;$j<count($arr);$j++){
if($arr[$i]>$arr[$j]){
$tmp=$arr[$i];
$arr[$i]=$arr[$j];
$arr[$j]=$tmp;
}
}
}
echo nl2br("\n After sorting array in Assending\n");
for($i=0;$i<count($arr);$i++){
echo "arr[$i]=".$arr[$i]."<br>";
}
for($i=0;$i<count($arr);$i++){
for($j=$i+1;$j<count($arr);$j++){
if($arr[$i]<$arr[$j]){
$tmp=$arr[$i];
$arr[$i]=$arr[$j];
$arr[$j]=$tmp;
}
}
}
echo nl2br("\n After sorting array in Descending\n");
for($i=0;$i<count($arr);$i++){
echo "arr[$i]=".$arr[$i]."<br>";
}

?>
</body>
</html>
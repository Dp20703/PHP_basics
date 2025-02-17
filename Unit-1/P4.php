<?php
$sub=array(1,2,3,4,5,6,7,8,9,10);
$cnt=count($sub);
echo $cnt;
for($i=0;$i<$cnt;$i++){
echo "<br>arr[".$i."]=".$sub[$i];
}

foreach($sub as $val){
echo "<br>".$val;
}

$m=array("banana",11,333,'A');
echo "<br>";
print_r($m);
for($j=0;$j<count($m);$j++){
echo "<br> arr[".$j."]".$m[$j];
}
?>
<?php
$cnt=0;
$match=1;
$arr=array(1,23,1,4,1,1,1);
for($i=0;$i<count($arr);$i++){
if($arr[$i]==$match){
$cnt++;
}}
echo $match.' is fond <b>'.$cnt.' </b> times<br>.';

$cnt=0;
$word='hello';
$string='hello student hello hello have a nice day';
$v=explode(" ",$string);
for($i=0;$i<count($v);$i++){
if($v[$i]==$word){
$cnt++;
}
}
echo $word.' is found <b>'.$cnt.'</b> times';
?>
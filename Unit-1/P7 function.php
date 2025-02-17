<?php 

//function without arguments:
function string_cat(){
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$fullname=$fname.$lname."<br>";
echo $fullname;
}

//function with arguments:
function str_cat($fname,$lname){
$fullname=$fname.$lname;
echo $fullname;
}
string_cat();
str_cat($_POST['fname'],$_POST['lname']);
?>
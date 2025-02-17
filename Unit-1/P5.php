<?php
$student=array("Name"=>"Hima Patel","Age"=>5,"Height"=>3.4,"City"=>"Ahemdabad");
//print_r($student);
echo $student["Name"]."<br>";
echo $student["Age"]."<br>";
echo $student["Height"]."<br>";
echo $student["City"]."<br>";

foreach($student as $key=>$val)
{
echo "<br>[$key]=".$val;
}

$student2=array("Name"=>"Darshan","Age"=>22);
print_r($student);
echo "<br>";
echo $student2["Name"]."<br>";
echo $student2["Age"]."<br>";

foreach($student2 as $key=>$val){
echo "<br>[".$key."] ".$val;
}
?>

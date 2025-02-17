<?php

$shop=array("mobile"=>array
('Samsung'=>'m12','apple'=>'i12','oppo'=>'reno2','mi'=>'note9pro'
),
"Laptop"=>array(
'lenovo'=>'z350','hp'=>'hp220','dell'=>'ins12'
));

echo $shop['mobile']['Samsung']."<br>";
echo $shop['mobile']['mi']."<br>";
echo $shop["mobile"]["apple"].'<br>';
echo $shop['Laptop']['lenovo'].'<br>';
?>
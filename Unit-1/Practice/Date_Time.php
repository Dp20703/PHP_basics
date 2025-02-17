<?php
echo "today date:";
echo date('d-m-y')."<br>";
echo date('H-i-s A');
echo "<br>Today date:";
echo date('D-M-Y')."<br>";
$time=time();
echo $time."<br>";
echo date('D-M-Y h:i:s',$time)."<br>";;	

//make time:
$time=mktime(20,51,40,28,03,2025);
echo $time."<br>";;
echo date("D-M-Y h:i:s",$time);
/*
$time2=mktime();
echo $time2."<br>";
echo date('D-M-Y h:i:s',$time2);
*/
//date_create:
$date_con=date_create("2021-01-02");
echo "<br>".date_format($date_con,"d/m/y")."<br>";;	

//difference betweend dates using date_diff():
$dc1=date_create('2021-01-02');
$dc2=date_create('2021-01-05');
$interval=date_diff($dc1,$dc2);
echo $interval->format('%R%a days')."<br>";;


?>
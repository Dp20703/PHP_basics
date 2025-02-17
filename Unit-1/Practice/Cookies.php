<?php
//Creating cookie:
$username="darshan";
setcookie("username",$username,time()+2*24*60*60,"/","",0);
echo "Cookie Successfully Created"."<br>"; 

//Displaying cookie value:	
if(isset($_COOKIE['username']))
{
echo "cookie is set with value=".$_COOKIE['username']."<br>";
}
else{
echo "Cookie is not set!";
}

//deleting cookie:
setcookie("username","",time()-60,"/","",0);
echo "Cookie is successfully deleted";

?>
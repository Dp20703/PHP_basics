<?php
Session_start();
$_SESSION["username"]="user_123@gmail.com";
$_SESSION["mobile"]="9016817271";
echo "session variable for username and mobile is set.";
//Session_unset();
//Session_destroy();
?>
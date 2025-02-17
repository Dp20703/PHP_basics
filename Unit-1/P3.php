<?doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Program 3</title>
</head>
<body>
<?php
$age="14";
$gender="f";
if($age>18){
if($gender=="M"||$gender=="m"){
echo "You are eligible for vote and you're male candidate";
}

else{
echo "You are eligible for vote and you're female candidate";
}
}
else{
print("You are not eligible for vote.....");
}

?>
</body>
</html>
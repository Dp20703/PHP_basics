post_data.php
<!doctype HTML>
<html>
<head>
<title>Post Data</title>
</head>
<body>
<form method="post" action="function.php" name='add'>
<label for='n1'>First name</label>
<input type='text' name='fname' value='' placeholder='Enter your first name'/><br>
<label for='n2'>Last name</label>
<input type='text' name='lname' value='' placeholder='Enter your last name'/><br>
<input type='submit' name='submit' value='submit'/>
</form>
</body>
</html>
function.php
<?php 
//function without arguments:
function string_cat(){
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$fullname=$fname.$lname.'<br>';
echo $fullname;
}
string_cat();
?>

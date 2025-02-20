<! doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Program 8 page 1</title>
<script type="text/javascript" language="javascript">


//use for cancle button:
function Cancle()
{
document.location.href="P8(1).php";
return false;
}
</script>

<script type="text/javascript" language="javascript">

//use to verfity the student:
function Verify()
{
var xmlhttp;
if(window.XMLHttpRequest)
{
xmlhttp=new XMLHttpRequest();
}
var fname=document.getElementById("fname").value;
var contact=document.getElementById("contact").value;
var email=document.getElementById("email").value;
var address=document.getElementById("address").value;

xmlhttp.open("GET","P8(2).php?fname="+fname+"&contact="+contact+"&email="+email+"&address="+address,true);

xmlhttp.onreadystatechange=function()
{
	if(xmlhttp.readyState==4 && xmlhttp.status==200)
	{
	document.getElementById("info").innerHTML=xmlhttp.responseText;
	}
}
xmlhttp.send();
}
</script>


<script type="text/javascript" language="javascript">

//use for rest button:
function Rest()
{
	document.getElementById("fname").value="";
	document.getElementById("contact").value="";
	document.getElementById("email").value="";
	document.getElementById("address").value="";
}
</script>
</head>
<body>

<input type='hidden' value='Add' name='action'/>
<table>
	<tr>
		<td>Full name </td>
		<td><input type='text' name='fname' id='fname' value=""/></td>
	</tr>
		<tr>
		<td>Contact No </td>
		<td><input type='text' name='contact' id='contact' value=""/></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><input type='email' name='email' id='email' value=""/></td>
	</tr>
	
	<tr>
		<td>Address</td>
		<td><textarea name='address' id='address' ></textarea></td>
	</tr>
	
	<tr>
		<td><input type='submit' name='submit' value='submit' onClick="Verify(); return false;"/></td>
		<td><input type='reset' name='reset' value='reset' onClick="Rest();"/></td>
		<td><input type='button' name='cancle' value='cancle' onClick="Cancle();"/></td>
	</tr>

</table>
<span id="info" style="color:red;font-size:24px;"></span>
</body>
</html>
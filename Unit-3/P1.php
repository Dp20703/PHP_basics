<!doctype html>
<html>
<head>
<title>Form data P1 </title>

<script type="text/javascript" language="javascript">
function showdata()
{
	var xmlhttp;
	if(window.XMLHttpRequest)
	{
		xmlhttp=new XMLHttpRequest();
	}

	var uname=document.getElementById("uname").value;
	var pass=document.getElementById("pass").value;

	xmlhttp.open("POST",'P1(2).php?uname='+uname+'&pass='+pass,true);

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
</head>

<body>
<form id='frm' name='frm' action='P1(2).php' method='get' onSubmit="showdata(); return false;">
Enter UserName:<input type="text" id="uname" name="uname"/> </br>
Enter Password:<input type="password" id="pass" name="pass"/> </br>
<input type='submit' name='submit' value='submit'/>
</form>
<h1>
<div id="info"></div>
</h1>
</body>
</html>
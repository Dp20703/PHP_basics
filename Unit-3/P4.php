<?doctype html>
<html>
<head>
<title> P4 page 1</title>
<style>
#info{
color:red;
background-color:#FFCC33;
}
</style>

<script type="text/javascript" language="javascript">
function catdisplay()
{
var xmlhttp;
if(window.XMLHttpRequest)
{
xmlhttp=new XMLHttpRequest();
}

var n=document.getElementById('cat').value;

xmlhttp.open("GET","P4(2).php?n="+n,true);

xmlhttp.onreadystatechange=function()
{
if(xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById('info').innerHTML=xmlhttp.responseText;
}
else
{
document.getElementById('info').innerHTML="Reponse not set something gone wrong...";
}
}
xmlhttp.send();

}

</script>
</head>
<body>
<select name='cat' id='cat' onChange='catdisplay()'>
<option value=''>please select </option>
<option value='camera'>Camera </option>
<option value='mobile'>Mobile </option>
<option value='computer'>Computer</option>
<option value='keyboard'>Keyboard</option>
</select>
<h1><div id='info'></div></h1>
</body>
</html>
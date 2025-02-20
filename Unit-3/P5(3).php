<! doctype html>
<html>
<head>
<title>Checkbox</title>

<script type="text/javascript" language="javascript">
function selection()
{

var xmlhttp;
if(window.XMLHttpRequest)
{
xmlhttp=new XMLHttpRequest();
}
var r=document.getElementsByName("game");
var game="";
for(var i=0;i<r.length;i++)
{
if(r[i].checked==true)
{
game+=r[i].value+"";
}
}

xmlhttp.open("GET","P5(4).php?checkselect="+game,true);

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
<body style="margin-left:500px;">

<input type="checkbox" name="game" value="cricket" onClick="selection(); "/> Cricket <br/>
<input type="checkbox" name="game" value="football" onClick="selection(); "/> FootBall <br/>
<input type="checkbox" name="game" value="tennis" onClick="selection(); "/> Tennis <br/>
<input type="checkbox" name="game" value="basketball" onClick="selection(); "/> BaskteBall <br/>

<h1 id="info"></h1>
</body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CHART ROOM </title>
<link rel="stylesheet" href="fcss.css" type="text/css"/>
<?php 
session_start();
if($_SESSION['log']==1)
{
	$titl= $_POST['topic'];
	$titl=htmlspecialchars($titl);
	$titl=urlencode($titl);
	$pixx= 'frmpix/';
	$pixx= $pixx.$_FILES['img']['name'];
	$text= $_POST['text'];
	$text=htmlspecialchars($text);
	$text=urlencode($text);
	$nam= $_SESSION['nam'];
	$conn= mysql_connect('localhost','root','');
	mysql_select_db('my_php');
	$nn= mysql_query("select *from chat_group where user_name='".$nam."'");
	$d= mysql_fetch_array($nn);
	$mn= $d['user_id'];
	move_uploaded_file($_FILES['img']['tmp_name'],$pixx);
	$q= mysql_query("insert into message (tittle,message,image,user_id) values('$titl','$text','$pixx','$mn')");
}
else{ echo '<meta http-equiv="refresh" content="0; url=login.php">';}
?>


</head>

<body>
<form action="save.php" method="post">
<div id="div">

<div id="ban">

</div>
<div id="bar">
<ul id="ba">
<li class="l"><a href="index.php"> HOME </a></li>
<li class="l"><a href="#"> SERVICES </a></li>
<li class="l"><a href="#"> SHOPE ONLINE </a></li>
<li class="l"><a href="#"> BUSINESS </a></li>
<li class="l"><a href="#"> GAMES </a></li>
<li class="l" id="ho"><a href="tlist.php"> FORUM </a></li>
<!--<li class="l"><a href="login.php"> LOGIN </a></li>-->
<li class="l"><a href="logout"> LOGOUT </a></li>
</ul>
</div>

<div id="bdy5">
<div id="prnt"> CREATE A TOPIC</div>
<div  id="crt2">
<?php
if ($q)
	echo'YOUR TOPIC HAS BEEN CREATED SUCCESSFULY <br /> CLICK <a href="tlist.php">HERE</a> TO GO BACK TO THE FORUM...';
else echo mysql_error();
?>
</div>
</div>

</div>
</form>
</body>
</html>
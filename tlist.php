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
	$conn= mysql_connect('localhost','root','');
	mysql_select_db('my_php');
	$nn= mysql_query("select * from message");
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
<li class="l"><a href="chatpage.php"> CHAT </a></li>
<li class="l"><a href="#"> SHOPE ONLINE </a></li>
<li class="l"><a href="#"> BUSINESS </a></li>
<li class="l"><a href="#"> GAMES </a></li>
<li class="l" id="ho"><a href="tlist.php"> FORUM </a></li>
<!--<li class="l"><a href="login.php"> LOGIN </a></li>-->
<li class="l"><a href="logout.php"> LOGOUT </a></li>
</ul>
</div>
<div id="advt"></div>
<div id="bdy6">
<div id="prnt">TOPIC LIST</div>
<div  id="crt2">
<?php while($d= mysql_fetch_array($nn) )
{
echo"<a href=topics.php?title=".$d['text_id'].">". $d['tittle'].'</a><br><hr/>';
}
?>
 <div id="crt"> <a href="newt.php"><b>CREATE NEW TOPIC </b></a></div>
 </div>
</div>

</div>
</form>
</body>
</html>
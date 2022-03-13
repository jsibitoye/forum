<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CHART ROOM </title>
<link rel="stylesheet" href="fcss.css" type="text/css"/>
<?php 
session_start();
$_SESSION['log']=0;
?>
</head>

<body>
<form action="login2.php" method="post">
<div id="div">

<div id="ban">

</div>
<div id="bar">
<ul id="ba">
<li class="l" ><a href="index.php"> HOME </a></li>
<li class="l"><a href="#"> SERVICES </a></li>
<li class="l"><a href="#"> SHOPE ONLINE </a></li>
<li class="l"><a href="#"> BUSINESS </a></li>
<!--<li class="l"><a href="#"> GAMES </a></li>-->
<li class="l"><a href="topics.php"> FORUM </a></li>
<li class="l" id="ho"><a href="login.php"> LOGIN </a></li>
<li class="l"><a href="register.php"> REGISTER </a></li>

</ul>
</div>
	
<div id="bdy4">
<div id="lgn2"><h3>YOU ARE NOW LOGED OUT, <br />
CLICK <a href="login.php">HERE</a> TO LOGIN.</h3></div>
</div>

</div>
</form>
</body>
</html>
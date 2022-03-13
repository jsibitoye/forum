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
	$nm= $_SESSION['nam'];
	$_SESSION['pgload']=1;
	$conn= mysql_connect('localhost','root','');
	mysql_select_db('my_php');
	$q= mysql_query('select * from chat_group where user_name not like"%'.$nm.'%"');
	//if($q)
	//{echo 'jkl';} else{echo 'noooooo'.mysql_error() ;}
	
}
else{ echo '<meta http-equiv="refresh" content="0; url=login.php">';}
?>
</head>

<body>
<form action="chatpage.php" method="post">
<div id="div2">
<div id="ban">

</div>
<div id="bar">
<ul id="ba">
<li class="l"><a href="index.php"> HOME </a></li>
<li class="l"><a href="ulist.php"> CHAT </a></li>
<li class="l"><a href="#"> SHOPE ONLINE </a></li>
<li class="l"><a href="#"> BUSINESS </a></li>
<li class="l"><a href="#"> GAMES </a></li>
<li class="l" id="ho"><a href="tlist.php"> FORUM </a></li>
<!--<li class="l"><a href="login.php"> LOGIN </a></li>-->
<li class="l"><a href="logout.php"> LOGOUT </a></li>
</ul>
</div>
<div id="advt"></div>
<div id="bdy8">
  <div id="chatscrl">
<?php while($cmts=mysql_fetch_array($q))
	{ 
	$vm= $cmts['user_name'];
	$pic=$cmts['pic'];
  	echo '<div class="pep2"><div class="pep"> <a href=chatpage.php?unam='.$vm.'><img height="100%" width="100%" src="'.$pic.'"></div>
	<br><font size="5" color=#FFFFFF>'.ucwords($vm).'</font></div>';
	
	// .$c_nm['user_name']).'</font>'.'<br>'. $cmts['coment'].'<br>'.'<hr size="1px" color="#663300">';
	}
?></div>
<b></b></div>
 
</div>

</div>
</form>
</body>
</html>
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
	$tid= $_GET['title'];
	$_SESSION['tpc_id']=$tid;
	$conn= mysql_connect('localhost','root','');
	mysql_select_db('my_php');
	$q= mysql_query('select * from message where text_id='.$tid); 
	$rtn=mysql_fetch_array($q);
	$uid= $rtn['user_id'];
	$q2= mysql_query('select * from chat_group where user_id='.$uid);
	$udtl= mysql_fetch_array($q2);
	$q3= mysql_query('select * from comments where text_id='.$tid);
	//if($rtn)
	//{echo 'jkl'.$rtn['image'];} else{echo 'noooooo'.mysql_error() ;}
	
}
else{ echo '<meta http-equiv="refresh" content="0; url=login.php">';}
?>
</head>

<body>
<form action="coment.php" method="post">
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
<div id="bdy">
<div id="prnt"> <?php echo strtoupper(rawurlencode($rtn['tittle']))  ?></div> 
<div id="topix"><img height="100%" width="100%" src=" <?php echo $rtn['image']; ?>" /></div>
<div id="pic"><img height="100%" width="100%" src=" <?php echo $udtl['pic']; ?>" />
 BY : <?php echo strtoupper($udtl['user_name']); ?>
</div>

<div id="tex"> 
<?php  echo rawurlencode($rtn['message']); ?> 
</div>
<div id="comntscrl">
<b>COMMENTS</b><br /> <br />
<?php while($cmts=mysql_fetch_array($q3))
	{ 
	$vm= $cmts['user_id'];
  $q4= mysql_query('select * from chat_group where user_id='.$vm);
  $c_nm=mysql_fetch_array($q4);
		echo '<font color=#FFFFFF>'.strtoupper($c_nm['user_name']).'</font>'.'<br>'. $cmts['coment'].'<br>'.'<hr size="1px" color="#663300">';
	}
?></div>
<div id="comt"> <b> SAY SOMETHING : &nbsp; </b><br />
  <textarea name="cmt"  cols="38" rows="4" > </textarea>
  <br />
  <input type="submit" class="lbut" value="COMMENT"/>
</div>
<b></b>
  
<div id="crt"> <a href="newt.php"><b>CREATE NEW TOPIC </b></a></div>
  </div>
 
</div>

</div>
</form>
</body>
</html>
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
	if($_SESSION['pgload']==1)
	{
	$frnd= $_GET['unam'];
	$_SESSION['frnd']=$frnd;};
	$me=$_SESSION['nam'];
	$frnd=$_SESSION['frnd'];
	$conn= mysql_connect('localhost','root','');
	mysql_select_db('my_php');
	$us= mysql_query('select user_id from chat_group where user_name="'.$me.'"');
	$rme=mysql_fetch_array($us);
	
	$mfrnd= mysql_query('select user_id from chat_group where user_name="'.$frnd.'"');
	$rmfrnd=mysql_fetch_array($mfrnd);
	
	$us= mysql_query('select user_name from chat_group');
}
else{ echo '<meta http-equiv="refresh" content="0; url=login.php">';}
?>
</head>

<body>
<form action="chatsender.php" method="post">
<div id="div2">
<div id="ban">

</div>
<div id="bar">
<ul id="ba">
<li class="l"><a href="index.php"> HOME </a></li>
<li class="l" id="ho"><a href="ulist.php"> CHAT </a></li>
<li class="l"><a href="#"> SHOPE ONLINE </a></li>
<li class="l"><a href="#"> BUSINESS </a></li>
<li class="l"><a href="#"> GAMES </a></li>
<li class="l"><a href="tlist.php"> FORUM </a></li>
<!--<li class="l"><a href="login.php"> LOGIN </a></li>-->
<li class="l"><a href="logout.php"> LOGOUT </a></li>
</ul>
</div>
<div id="advt"></div>
<div id="bdy7" >
<div id="prnt">YOU ARE CHATING WITH <font color="#663333"><?php  echo strtoupper($frnd);?></font></div> 
<div id="userlist">
<h4 align="center"><font color="#0033FF">OTHER USERS</font></h4><br />
<div id="usrs">
<?php 
while($jm= mysql_fetch_array($us))
{echo"<a href=chng.php?nwnam=".$jm['user_name'].">". ucwords($jm['user_name'])."</a><br><br>";}
?>
</div>
</div>
<div id="chat">
<div id="chadisplay">

<?php
$conn= mysql_connect('localhost','root','');
	mysql_select_db('my_php');
$us= mysql_query('select c.chat,sender_id from chats c join chat_group g on c.sender_id=g.user_id
where sender_id='.$rme["user_id"].' and reciever_id='.$rmfrnd["user_id"].'
or sender_id='.$rmfrnd["user_id"].' and reciever_id='.$rme["user_id"].'
 order by send_date asc');
while($tk= mysql_fetch_array($us))
{
	if($tk['sender_id']==$rme['user_id'])
	{
		echo '<br><div id="usr1">'.ucwords($tk['chat']).'</div>'.'<br>';
	}
	else{echo '<div id="usr2">'. ucwords($tk['chat']).'</div>'.'<br>'; }
}
 ?>

</div>
<div id="chatext"> <font color="#003366"><i>Say Something  &nbsp;</i> </font><br />
  <textarea name="msg"  cols="30" rows="3" > </textarea>
  <br />
  <input type="submit" class="lbut" value="SEND CHAT"/>
</div>
</div>

<b></b></div>
 
</div>

</div>
</form>
</body>
</html>
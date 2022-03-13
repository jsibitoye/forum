<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<?php 
session_start();
$_SESSION['pgload']=0;
$txt= $_POST['msg'];
$sndr= $_SESSION['nam'];
$rcvr= $_SESSION['frnd'];
mysql_connect('localhost','root','');
mysql_select_db('my_php');
$q1=mysql_query('select user_id from chat_group where user_name="'.$sndr.'"');
$sndrid=mysql_fetch_array($q1);
$q2=mysql_query('select user_id from chat_group where user_name="'.$rcvr.'"');
$rcvrid=mysql_fetch_array($q2);
$q=mysql_query('insert into chats (chat,sender_id,reciever_id) values("'.$txt.'",'.$sndrid["user_id"].','.$rcvrid["user_id"].')');
//if ($q)
//{echo 'yeahhh'.$rcvrid['user_id'];}
//else{ echo mysql_error();}
echo '<meta http-equiv="refresh" content="0; url=chatpage.php">'
?>
</head>

<body>
</body>
</html>
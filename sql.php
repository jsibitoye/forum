<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php 
$conn= mysql_connect('localhost','root','');
	mysql_select_db('my_php');
$us= mysql_query('select c.chat,c.sender_id from chats c join chat_group g on c.sender_id=g.user_id
where sender_id=1 and reciever_id=8
 order by send_date asc');
while($tk= mysql_fetch_array($us))
{ $a+=1;
	echo $a.$tk['chat'].'<br>';
}
if ($tk)
{echo 'yaaa';}
else{echo mysql_error();}

?>



</body>
</html>
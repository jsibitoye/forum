<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<?php 
	session_start();
	$nam= $_SESSION['nam'];
	$t_id= $_SESSION['tpc_id'];
	$cmt= $_POST['cmt'];
	$conn=mysql_connect('localhost','root','');
	mysql_select_db('my_php');
	$q= mysql_query('select * from chat_group where user_name="'.$nam.'"');
	$return= mysql_fetch_array($q);
	$u_id=$return['user_id'];
	$q3= mysql_query("insert into comments (coment,text_id,user_id) values('$cmt','$t_id','$u_id')" );
	if($q3)
	{echo '<meta http-equiv="refresh" content="0; url=tlist.php">';}
	else{ echo mysql_error();}
?>
</head>

<body>
</body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<?php 
	$unm= $_POST['nam'];
	$pwrd=$_POST['pwrd'];
mysql_connect("localhost","root","");
mysql_select_db('my_php');
$q= mysql_query('select * from  chat_group where user_name="'.$unm.'" and password="'.$pwrd.'"');
if($q)
{
$user= mysql_fetch_array($q);
$u=$user['user_name'];
$p=$user['password'];
if($u==$unm && $p==$pwrd)
	{
		session_start();
		$_SESSION['nam']=$unm;
		$_SESSION['log']=1;
		echo '<meta http-equiv="refresh" content="0.5; url=index.php">';
	}
else{echo '<meta http-equiv="refresh" content="0.5; url=login.php">';}
}
else{die();};
?>
</head>

<body>
</body>
</html>
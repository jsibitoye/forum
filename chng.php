<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<?php 
session_start();
$rcvrnam=$_GET['nwnam'];
$_SESSION['frnd']=$rcvrnam;
$_SESSION['ct']=1;
$_SESSION['pgload']=0;
echo '<meta http-equiv="refresh" content="0; url=chatpage.php">';

?>
</head>

<body>
</body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CHART ROOM </title>
<link rel="stylesheet" href="fcss.css" type="text/css"/>
<?php 
$fnam= $_POST["firstn"];
$lnam= $_POST["lastn"];
$dat=  $_POST["dofb"];
$user= $_POST["uname"];
$pw1=  $_POST["pwrd"];
$pw2=  $_POST["repwrd"];
$pic=  $_FILES["pic"]["name"];
if($fnam && $lnam && $dat && $user && $pw1 && $pw2 && $pic) 
{$pixpart='userspic/'.$pic;
move_uploaded_file($_FILES["pic"]["tmp_name"],$pixpart );
$con = mysql_connect("localhost","root","");
mysql_select_db("my_php");
if($pw1==$pw2)
{
$q= mysql_query("insert into chat_group (first_name,last_name,user_name,password,birthdate,pic) 
values('$fnam','$lnam','$user','$pw1','$dat','$pixpart') ");
  if ($q)
  {$msg = 'REGISTRATION SUCCESSFUL,<br /> YOU CAN NOW <a href="login.php">LOGIN</a> TO YOUR ACCOUNT!!!!';}
  else { $msg='REGISTRATION DETAILS WRONG, <br> PLEASE CLICK THE BACKSPACE KEY TO REVIEW YOUR DETAILS...';};
}
else{ $msg= 'YOU PASSWORD COMBINATION IS WRONG,  <br> PLEASE CLICK THE BACKSPACE KEY TO REVIEW YOUR DETAILS...'; }
}
else { $msg='REGISTRATION DETAILS WRONG, <br> PLEASE CLICK THE BACKSPACE KEY TO REVIEW YOUR DETAILS...';};
?>

</head>

<body>
<div id="div">
<div id="ban">

</div>
<div id="bar">
<ul id="ba">
<li class="l"><a href="#"> HOME </a></li>
<li class="l"><a href="#"> SERVICES </a></li>
<li class="l"><a href="#"> SHOPE ONLINE </a></li>
<li class="l"><a href="#"> BUSINESS </a></li>
<!--<li class="l"><a href="#"> GAMES </a></li>-->
<li class="l"><a href="#"> FORUM </a></li>
<li class="l"><a href="login.php"> LOGIN </a></li>
<li class="l" id="ho"><a href="register.php"> REGISTER </a></li>

</ul>
</div>
	
<div id="bdy1">
<div id="regsuc">
<h2>WELLCOME !!!
	<h3 align="center">
    <?php if ($msg){echo $msg;}else die(); ?>
    </h3>
</div>
</div>

</div>
</body>
</html>
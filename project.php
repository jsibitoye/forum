<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CHART ROOM </title>
<link rel="stylesheet" href="fcss.css" type="text/css"/>
<?php 
session_start();
$chk=$_SESSION['log'];
$nm=$_SESSION['nam'];
if($chk==1)
{
mysql_connect("localhost","root","");
mysql_select_db('my_php');
$q= mysql_query('select * from  chat_group where user_name="'.$nm.'"');
if($q)
{ $user= mysql_fetch_array($q);}
}
else{echo '<meta http-equiv="refresh" content="0.5; url=login.php">';}
?>

</head>

<body>
<div id="div">

<div id="ban">

</div>
<div id="bar">
<ul id="ba">
<li class="l" id="ho"><a href="index.php"> HOME </a></li>
<li class="l"><a href="#"> SERVICES </a></li>
<li class="l"><a href="#"> SHOPE ONLINE </a></li>
<li class="l"><a href="#"> BUSINESS </a></li>
<li class="l"><a href="#"> GAMES </a></li>
<li class="l"><a href="tlist.php"> FORUM </a></li>
<!--<li class="l"><a href="login.php"> LOGIN </a></li>-->
<li class="l"><a href="logout.php"> LOGOUT </a></li>
</ul>
</div>

<div id="bdy3">

<div id="nam"> <?php echo strtoupper($user['first_name'])." ".strtoupper($user['last_name']); ?></div>
<div id="pic2"><img height="100%" width="100%" src="<?php echo $user['pic']; ?>" /></div>
<div id="maq"> <marquee behavior="Sscroll " role="spinbutton"> BE INFORMED THAT THIS WEBSITE IS STILL VERRY MUCH UNDER CUNSTRUCTION!!!!</marquee></div>
<div id="details">
<p><b>NAME  &nbsp; &nbsp;:<b class="prof"> <?php echo strtoupper($user['first_name'])." ".strtoupper($user['last_name']); ?></b></b></p>
<p><b>STATUS  &nbsp;: <b class="prof"> OLINE</b></b></p>
<p><b>TOPICS &nbsp;: <b class="prof"> 5 <i>Topics</i></b></b></p>
<p><b>LOGINS : <b class="prof"> 4<i>Times</i></b></b></p>

</div>
<div id="expert">
<img src="nework.png" height="100%" />
</div>
<div id="links">

<b><font color="#330033" face="Comic Sans MS, cursive"><h3>USEFUL LINKS<hr size="10px" color="#FFFFFF"/></h3></font></b>

<ul>
	<li><a href="onlinemembers.php"><i> MEMBERS ONLINE</i></a></li>
    <hr size="5px" color="#FFFFFF"/>
    <li><a href="#" ><i> GET E-BOOKS</i></a></li>
    <hr size="5px" color="#FFFFFF"/>
    <li><a href="#"><i> ARROUND ME</i></a></li>
    <hr size="5px"  color="#FFFFFF"/>
  <li>  <a href="home service/index.html"><i> OUR BLOG</i></a></li>
  </ul>
  	<hr size="3px" color="#FFFFFF" />
</div>
</div>

</div>
</body>
</html>
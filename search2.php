<?php
$a= $_POST['l'];
$b= $_POST['u'];
$con=mysql_connect("localhost","root","");
mysql_select_db("my_php");
$gba=mysql_query("select * from chat_group where".$a." like %'".$b."' ");

while($yo= mysql_fetch_array($gba) )
{
	echo '<font size="+6" color="#CCCCCC">'.$yo.'</font>';
}
if($con)
{
	echo "jsiocfiu";
}

?>
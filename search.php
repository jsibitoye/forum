<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript" src="jquery-1.8.2.js">
</script>
<script type="text/javascript">
var sb;
  function yy()
  {
	sb= document.getElementById("by").value;
  }
  function ss()
  {
	  var j= document.getElementById("sch").value;
	  $.post("search2.php",{l:j,u:sb},function(h){document.getElementById("sp").innerHTML=h;});
	  
   }
</script>
</head>

<body>
search by <select onchange="yy()" id="by">
	<option>user_id</option>
	<option>first_name</option>
    <option>last_name</option>
    <option>user_name</option>
</select> <br /><br />
<input type="text" onkeyup="ss()" id="sch" />
<span id="sp"></span>
</body>
</html>
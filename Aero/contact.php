
<?php
session_start();
if (((isset($_POST['name'])) && (isset($_POST['email']))  && (isset($_POST['subject']))  && (isset($_POST['message']))) && (($_POST['name'] !="") 
    && ($_POST['email'] !="") && ($_POST['subject'] !="") && ($_POST['message'] !="") ))
{ 
	$_SESSION['name']=$_POST['name'];
	$_SESSION['email']=$_POST['email'];
	$_SESSION['subject']=$_POST['subject'];
	$_SESSION['message']=$_POST['message'];
	$name = $_SESSION['name'];
	$email = $_SESSION['email'];
	$subject = $_SESSION['subject'];
	$message = $_SESSION['message'];
	
	$header = "From:"."".$name.""."<".$email.">"."\r\n" ;
		
	@mail('info.rc.world@gmail.com',$subject,wordwrap($message,70),$header);
  
  echo <<<_END

<script>
alert("Message sent successfully");
</script>

_END;

}

?>


<?php

echo <<<_END

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 4.0 Transitional//EN"
 "http://www.w3.org/TR/html4/DTD/loose.dtd">

<html>
<head>
<title>Contact--> [R/C World Group]</title>
<link rel ="stylesheet" href = "air.css" type = "text/css" media="screen">
<script type="text/javascript" src="lib/validation.js"></script>
</head>

<body bgcolor = "black">
<table id = "container" border = "0" width = "1300px" height = "100px" align="center">
<tr><td><font color = "white" size = "20px"><b>R/C World Calculator</b></font></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td width = "1200px">
<ul id = "menu2">
<li style = "border-left : solid white 1px;-moz-border-radius: 10px;-webkit-border-radius:10px; -ms-border-radius: 10px;"><a href="index.php">Home</a></li>
<li style = "-moz-border-radius: 10px;-webkit-border-radius:10px;-ms-border-radius: 10px;"><a href="longstability.php">Longitudinal<br>&nbsp;&nbsp;&nbsp;&nbsp;Stability</a>
<li ><a href="latstability.php">Lateral-Directional<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Stability</a>
<li ><a href="concept.php">Stability Concept</a></li>
<li style = "border-right : solid white 1px;"><a href="contact.php">Contact Us</a></li>
</ul></td>
<td><font color = "white" size = "20px"><b>Aviation &nbsp; Group</b></font></td>
</tr>
</table>

<center><table id = "middlepiece" border = "0" width = "1200" height = "162" align="center">
<tr><td valign = "bottom" width = "180" id = "sidecont"><img src = "images/back2.jpg" width = "180" class="active" height="730"/></td>
<td width = "700"><center><img src = "images/back.jpg"></center>

<div id="contact_box">

_END;

require_once "page_content/contact.txt";

echo <<<_END
</div>
                                       
</td>
<td valign = "bottom" id="sidecont"><img src = "images/back1.jpg" width = "180" height="730"></td>
</tr>
</table></center>

</body>

</html>

_END

?>

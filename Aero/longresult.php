<?php
session_start();

echo <<<_END

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 4.0 Transitional//EN"
 "http://www.w3.org/TR/html4/DTD/loose.dtd">

<html>
<head>
<title>Longitudinal Stability</title>
<link rel ="stylesheet" href = "air.css" type = "text/css" media="screen">
<script type="text/javascript" src="lib/jquery.1.3.2.js"></script>
<script type="text/javascript" src="lib/jquery.coda-slider-2.0.js"></script>
<script type="text/javascript" src="lib/script.js"></script>
</head>

<body bgcolor= "black">
<table id = "container" border = "0" width = "1300px" height = "120px" align="center">
<tr><td><font color = "white" size = "20px"><b>R/C World Calculator</b></font></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td width = "1200px">
<ul id = "menu">
<li style = "border-left : solid white 1px;-moz-border-radius: 10px;-webkit-border-radius:10px;-ms-border-radius: 10px;"><a href="index.php">Home</a></li>
<li style = "-moz-border-radius: 10px;-webkit-border-radius:10px;-ms-border-radius: 10px;"><a href="longstability.php">Longitudinal<br>&nbsp;&nbsp;&nbsp;&nbsp;Stability</a>
<li ><a href="latstability.php">Lateral-Directional<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Stability</a>
<li ><a href="concept.php">Stability Concept</a></li>
<li style = "border-right : solid white 1px;"><a href="contact.php">Contact Us</a></li>
</ul></td>
<td><font color = "white" size = "20px"><b>Aviation &nbsp; Group</b></font></td>
</tr>
</table>

_END;


?>

 <?php if($_SESSION['longResult'] == "The aircraft is statically stable in the Longitudinal axis"){ 
 
 ?>

	
<center><table id = "middlepiece" border = "0" width = "1300px" style="position:relative;">
<tr><td valign = "top" width = "180" id="slidercont">
<img src = "images/1.jpg" width = "180" height="745" alt="" class="active"><img src = "images/4.jpg" width = "180" height="745" alt=""></td>
<td width = "700"><center><img src = "images/back.jpg"></center>


<div id="result_box">
<center><table id="longresult"><tr><br></tr><tr><img src="images/correct.jpg" width="300"></tr><tr> <br><h2>
<font style ="text-decoration:blink; color:#050;">The aircraft is statically stable in the Longitudinal axis.</font></h2></tr><tr><center><font color="#3333FF">For an aircraft to be stable in pitch, its <b>CG</b> must be forward of the<br>
    Neutral Point <b>NP</b> by a  safety factor called the <b>Static Margin</b>, which <br>
    is a percentage of the <b>MAC </b>(Mean Aerodynamic Chord).<br>
    Static Margin should be between <b>5%</b> and <b>15%</b> for  good stability.</font></center>
</tr><br>
 <tr><td><font color="white"> Neutral Point:</font></td><td><input id ="result_np" type="text" name="npoint" readonly="readonly" value = "<?php echo $_SESSION['h_np']."  %"; ?>"></td><td><font color="white">&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp Center of Gravity:</font></td>
<td><input id ="result_cg" type = "text" name = "cgravity" readonly="readonly" value = "<?php print $_SESSION['h_cg']."  %"; ?>"></td><td><font color="white"> &nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbspStatic Margin:</font></td>
 <td><input id ="result_margin" type="text" name="smargin" readonly="readonly" value ="<?php echo $_SESSION['margin']."  %"; ?>" style="border-color: #3F0"></td></tr></table></center>
</div>
</td>
<td valign = "top" id="slidercont">
<img src = "images/3.jpg" width = "180" height="745" alt="" class="active"><img src = "images/2.jpg" width = "180" height="745" alt=""></td>
</tr>
</table></center>

</body>
</html>
<?php } ?>



<?php if($_SESSION['longResult'] == "The aircraft has marginal static stability in the Longitudinal axis"){ 
 
 ?>

	
<center><table id = "middlepiece" border = "0" width = "1300px" style="position:relative;" >
<tr><td valign = "top" width = "180" id="slidercont"><img src = "images/1.jpg" width = "180" height="745" alt="" class="active"><img src = "images/4.jpg" width = "180" height="745" alt=""></td>
<td width = "700"><center><img src = "images/back.jpg"></center>


<div id="result_box">
<center><table id="longresult"><tr><br></tr><tr><img src="images/critical.png" width="300"></tr><tr><br><h2>
<font style ="text-decoration:blink; color: #F90;">The aircraft has marginal static stability in the Longitudinal axis.</h2></tr><tr><center><font color="#3333FF">For an aircraft to be stable in pitch, its <b>CG</b> must be forward of the<br>
    Neutral Point <b>NP</b> by a  safety factor called the <b>Static Margin</b>, which <br>
    is a percentage of the <b>MAC </b>(Mean Aerodynamic Chord).<br>
    Static Margin should be between <b>5%</b> and <b>15%</b> for  good stability.</font></center>
</tr><br>
 <tr><td><font color="white"> Neutral Point:</font></td><td><input id ="result_np" type="text" name="npoint" readonly = "readonly" value = "<?php echo $_SESSION['h_np']."  %"; ?>"></td><td><font color="white">&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp Center of Gravity:</font></td>
<td><input id ="result_cg" type="text" name="cgravity" readonly="readonly"  value = "<?php echo $_SESSION['h_cg']."  %"; ?>"></td><td><font color="white"> &nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbspStatic Margin:</font></td>
 <td><input id ="result_margin" type="text" name="smargin" readonly="readonly" value ="<?php echo $_SESSION['margin']."  %"; ?>" style="border-color:#3F0"></td></tr></table></center>
</div>
</td>
<td valign = "top" id="slidercont"><img src = "images/3.jpg" width = "180" height="745" alt="" class="active"><img src = "images/2.jpg" width = "180" height="745" alt=""></td>
</tr>
</table></center>

</body>
</html>

<?php } ?>

<?php if($_SESSION['longResult'] == "The aircraft is statically unstable in the Longitudinal axis"){ 
 
 ?>

	
<center><table id = "middlepiece" border = "0" width = "1300px" style="position:relative;" >
<tr><td valign = "top" width = "180" id="slidercont"><img src = "images/1.jpg" width = "180" height="745" alt="" class="active"><img src = "images/4.jpg" width = "180" height="745" alt=""></td>
<td width = "700"><center><img src = "images/back.jpg"></center>


<div id="result_box">
<center><table id="longresult"><tr><br></tr><tr><img src="images/wrong.png" width="300"></tr><tr><br><h2>
<font style ="text-decoration:blink; color:#FF0000;">The aircraft is statically unstable in the Longitudinal axis.</font></h2></tr><center><font color="#3333FF">For an aircraft to be stable in pitch, its <b>CG</b> must be forward of the<br>
    Neutral Point <b>NP</b> by a  safety factor called the <b>Static Margin</b>, which <br>
    is a percentage of the <b>MAC </b>(Mean Aerodynamic Chord).<br>
    Static Margin should be between <b>5%</b> and <b>15%</b> for  good stability.</font></center>
</tr><br>
 <tr><td><font color="white"> Neutral Point:</font></td><td><input id ="result_np" type="text" name="npoint" readonly="readonly" value = "<?php echo $_SESSION['h_np']."  %"; ?>"></td><td><font color="white">&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp Center of Gravity:</font></td>
<td><input id ="result_cg" type="text" name="cgravity" readonly="readonly" value = "<?php echo $_SESSION['h_cg']."  %"; ?>"></td><td><font color="white"> &nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbspStatic Margin:</font></td>
 <td><input id ="result_margin" type="text" name="smargin" readonly="readonly" value ="<?php echo $_SESSION['margin']."  %"; ?>" style="border-color: #3F0"></td></tr></table></center>
</div>
</td>
<td valign = "top" id="slidercont"><img src = "images/3.jpg" width = "180" height="745" alt="" class="active"><img src = "images/2.jpg" width = "180" height="745" alt=""></td>
</tr>
</table></center>

</body>
</html>

<?php } ?>


<?php
    
    session_destroy ();
	
?>
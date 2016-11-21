<?php
session_start();

echo <<<_END

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 4.0 Transitional//EN"
 "http://www.w3.org/TR/html4/DTD/loose.dtd">

<html>
<head>
<title>Lateral - Directional Stability</title>
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
<li style = "border-left : solid white 1px;-moz-border-radius:10px;-webkit-border-radius:10px; -ms-border-radius:10px;"><a href="index.php">Home</a></li>
<li style = "-moz-border-radius: 10px;-webkit-border-radius:10px; -ms-border-radius:10px;"><a href="longstability.php">Longitudinal<br>&nbsp;&nbsp;&nbsp;&nbsp;Stability</a>
<li ><a href="latstability.php">Lateral-Directional<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Stability</a>
<li ><a href="concept.php">Stability Concept</a></li>
<li style = "border-right : solid white 1px;"><a href="contact.php">Contact Us</a></li>
</ul></td>
<td><font color = "white" size = "20px"><b>Aviation &nbsp; Group</b></font></td>
</tr>
</table>

_END;

?>

<?php //case 1 (correct, correct)

if (($_SESSION['latResult'] == "The aircraft is statically stable in the Lateral axis") && 
($_SESSION['dirResult'] == "The aircraft is statically stable in the Directional axis")) { ?>

<center><table id = "middlepiece" border = "0" width = "1300px" style="position:relative;" >
<tr><td valign = "top" width = "180" id="slidercont">
<img src = "images/1.jpg" width = "180" height="745" alt="" class="active"><img src = "images/4.jpg" width = "180" height="745" alt=""></td>
<td width = "700"><center><img src = "images/back.jpg"></center>

<center><div id = "result_box">
<center><table><tr><td id = "latdir_header"><h4><center><font color = "white">Static Lateral Stability</font></center></h4></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</td><td id= "latdir_header"><h4><center><font color = "white">Static Directional Stability</font></center></h4></td></tr>
<tr><td><br><center><img src = "images/correct.jpg" width = "240"></center></td><td></td><td><br><center><img src = "images/correct.jpg" width = "240">
</center></td></tr>

<tr><td><h4><font style ="text-decoration:blink;color:#050; font-size:18px;"><center>The aircraft is statically stable <br>in the <u>Lateral</u> axis.</center></font></h4></td><td></td><td><h4>
<font style ="text-decoration:blink; color:#050; font-size:18px;"><center>The aircraft is statically stable <br>in the <u>Directional</u> axis.</center></font></h4></td></tr>
</table></center>
<br><br><br>

<center><table id ="longresult"><tr><td><font color = "white"> Lateral Stability Coefficient :>></font></td><td><input id = "result_lat" type = "text" readonly = "readonly" value="<?php echo $_SESSION['latstab']; ?>"></td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id = "result_lat" type = "text" readonly = "readonly" value="<?php echo $_SESSION['dirstab']; ?>"></td><td><font color = "white"><<: Directional Stability Coefficient</font></td></tr></table></center>
</div></center>


</td>
<td valign = "top" id="slidercont">
<img src = "images/3.jpg" width = "180" height="745" alt="" class="active"><img src = "images/2.jpg" width = "180" height="745" alt=""></td>
</tr>
</table></center>
</body>
</html>

<?php }   ?>


<?php   // case 2 (correct, wrong)

if (($_SESSION['latResult'] == "The aircraft is statically stable in the Lateral axis") && 
($_SESSION['dirResult'] == "The aircraft is statically unstable in the Directional axis")) { ?>

<center><table id = "middlepiece" border = "0" width = "1300px" style="position:relative;" >
<tr><td valign = "top" width = "180" id="slidercont"><img src = "images/1.jpg" width = "180" height="745" alt="" class="active"><img src = "images/4.jpg" width = "180" height="745" alt=""></td>
<td width = "700"><center><img src = "images/back.jpg"></center>

<center><div id = "result_box">
<center><table><tr><td id = "latdir_header"><h4><center><font color = "white">Static Lateral Stability</font></center></h4></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</td><td id= "latdir_header"><h4><center><font color = "white">Static Directional Stability</font></center></h4></td></tr>
<tr><td><br><center><img src = "images/correct.jpg" width = "240"></center></td><td></td><td><br><center><img src = "images/wrong.png" width = "240"></center></td></tr>

<tr><td><h4><font style ="text-decoration:blink;color:#050; font-size:18px;"><center>The aircraft is statically stable <br>in the <u>Lateral</u> axis.</center></font></h4></td><td></td><td><h4>
<font style ="text-decoration:blink; color:#FF0000; font-size:18px;"><center>The aircraft is statically unstable <br>in the <u>Directional</u> axis.</center></font></h4></td></tr>
</table></center>
<br><br><br>

<center><table id ="longresult"><tr><td><font color = "white"> Lateral Stability Coefficient :>></font></td><td><input id = "result_lat" type = "text" readonly = "readonly" value="<?php echo $_SESSION['latstab']; ?>"></td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id = "result_lat" type = "text" readonly = "readonly" value="<?php echo $_SESSION['dirstab']; ?>"></td><td><font color = "white"><<: Directional Stability Coefficient</font></td></tr></table></center>
</div></center>


</td>
<td valign = "top" id="slidercont"><img src = "images/3.jpg" width = "180" height="745" alt="" class="active"><img src = "images/2.jpg" width = "180" height="745" alt=""></td>
</tr>
</table></center>
</body>
</html>

<?php }   ?>

<?php  // case 3 ( correct, critical)

if (($_SESSION['latResult'] == "The aircraft is statically stable in the Lateral axis") && 
($_SESSION['dirResult'] == "The aircraft has marginal static stability in the Directional axis")) { ?>

<center><table id = "middlepiece" border = "0" width = "1300px" style="position:relative;" >
<tr><td valign = "top" width = "180" id="slidercont"><img src = "images/1.jpg" width = "180" height="745" alt="" class="active"><img src = "images/4.jpg" width = "180" height="745" alt=""></td>
<td width = "700"><center><img src = "images/back.jpg"></center>

<center><div id = "result_box">
<center><table><tr><td id = "latdir_header"><h4><center><font color = "white">Static Lateral Stability</font></center></h4></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</td><td id= "latdir_header"><h4><center><font color = "white">Static Directional Stability</font></center></h4></td></tr>
<tr><td><br><center><img src = "images/correct.jpg" width = "240"><center></td><td></td><td><br><center><img src = "images/critical.png" width = "240">
</center></td></tr>

<tr><td><h4><font style ="text-decoration:blink;color:#050; font-size:18px;"><center>The aircraft is statically stable <br>in the <u>Lateral</u> axis.</center></font></h4></td><td></td><td><h4>
<font style ="text-decoration:blink; color: #F90; font-size:18px;"><center>The aircraft has marginal static stability <br>in the <u>Directional</u> axis.</center></font></h4></td></tr>
</table></center>
<br><br><br>

<center><table id ="longresult"><tr><td><font color = "white"> Lateral Stability Coefficient :>></font></td><td><input id = "result_lat" type = "text" readonly = "readonly" value="<?php echo $_SESSION['latstab']; ?>"></td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id = "result_lat" type = "text" readonly = "readonly" value="<?php echo $_SESSION['dirstab']; ?>"></td><td><font color = "white"><<: Directional Stability Coefficient</font></td></tr></table></center>
</div></center>


</td>
<td valign = "top" id="slidercont"><img src = "images/3.jpg" width = "180" height="745" alt="" class="active"><img src = "images/2.jpg" width = "180" height="745" alt=""></td>
</tr>
</table></center>
</body>
</html>

<?php }   ?>

<?php  // case 4 (wrong, critical)

if (($_SESSION['latResult'] == "The aircraft is statically unstable in the Lateral axis") && 
($_SESSION['dirResult'] == "The aircraft has marginal static stability in the Directional axis")) { ?>

<center><table id = "middlepiece" border = "0" width = "1300px" style="position:relative;" >
<tr><td valign = "top" width = "180" id="slidercont"><img src = "images/1.jpg" width = "180" height="745" alt="" class="active"><img src = "images/4.jpg" width = "180" height="745" alt=""></td>
<td width = "700"><center><img src = "images/back.jpg"></center>

<center><div id = "result_box">
<center><table><tr><td id = "latdir_header"><h4><center><font color = "white">Static Lateral Stability</font></center></h4></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</td><td id= "latdir_header"><h4><center><font color = "white">Static Directional Stability</font></center></h4></td></tr>
<tr><td><br><center><img src = "images/wrong.png" width = "240"></center></td><td></td><td><br><center><img src = "images/critical.png" width = "240">
</center></td></tr>

<tr><td><h4><font style ="text-decoration:blink;color:#FF0000; font-size:18px;"><center>The aircraft is statically unstable <br>in the <u>Lateral</u> axis.</center></font></h4></td><td></td><td><h4>
<font style ="text-decoration:blink; color:#F90; font-size:18px;"><center>The aircraft has marginal static stability <br>in the <u>Directional</u> axis.</center></font></h4></td></tr>
</table></center>
<br><br><br>

<center><table id ="longresult"><tr><td><font color = "white"> Lateral Stability Coefficient :>></font></td><td><input id = "result_lat" type = "text" readonly = "readonly" value="<?php echo $_SESSION['latstab']; ?>"></td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id = "result_lat" type = "text" readonly = "readonly" value="<?php echo $_SESSION['dirstab']; ?>"></td><td><font color = "white"><<: Directional Stability Coefficient</font></td></tr></table></center>
</div></center>


</td>
<td valign = "top" id="slidercont"><img src = "images/3.jpg" width = "180" height="745" alt="" class="active"><img src = "images/2.jpg" width = "180" height="745" alt=""></td>
</tr>
</table></center>
</body>
</html>

<?php }   ?>

<?php  // case 5 (wrong, correct)

if (($_SESSION['latResult'] == "The aircraft is statically unstable in the Lateral axis") && 
($_SESSION['dirResult'] == "The aircraft is statically stable in the Directional axis")) { ?>

<center><table id = "middlepiece" border = "0" width = "1300px" style="position:relative;" >
<tr><td valign = "top" width = "180" id="slidercont"><img src = "images/1.jpg" width = "180" height="745" alt="" class="active"><img src = "images/4.jpg" width = "180" height="745" alt=""></td>
<td width = "700"><center><img src = "images/back.jpg"></center>

<center><div id = "result_box">
<center><table><tr><td id = "latdir_header"><h4><center><font color = "white">Static Lateral Stability</font></center></h4></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</td><td id= "latdir_header"><h4><center><font color = "white">Static Directional Stability</font></center></h4></td></tr>
<tr><td><br><center><img src = "images/wrong.png" width = "240"></center></td><td></td><td><br><center><img src = "images/correct.jpg" width = "240"></center>
</td></tr>

<tr><td><h4><font style ="text-decoration:blink;color:#FF0000; font-size:18px;"><center>The aircraft is statically unstable <br>in the <u>Lateral</u> axis.</center></font></h4></td><td></td><td><h4>
<font style ="text-decoration:blink; color:#050; font-size:18px;"><center>The aircraft is statically stable <br>in the <u>Directional</u> axis.</center></font></h4></td></tr>
</table></center>
<br><br><br>

<center><table id ="longresult"><tr><td><font color = "white"> Lateral Stability Coefficient :>></font></td><td><input id = "result_lat" type = "text" readonly = "readonly" value="<?php echo $_SESSION['latstab']; ?>"></td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id = "result_lat" type = "text" readonly = "readonly" value="<?php echo $_SESSION['dirstab']; ?>"></td><td><font color = "white"><<: Directional Stability Coefficient</font></td></tr></table></center>
</div></center>


</td>
<td valign = "top" id="slidercont"><img src = "images/3.jpg" width = "180" height="745" alt="" class="active"><img src = "images/2.jpg" width = "180" height="745" alt=""></td>
</tr>
</table></center>
</body>
</html>

<?php }   ?>

<?php  // case 6 (wrong, wrong)

if (($_SESSION['latResult'] == "The aircraft is statically unstable in the Lateral axis") && 
($_SESSION['dirResult'] == "The aircraft is statically unstable in the Directional axis")) { ?>

<center><table id = "middlepiece" border = "0" width = "1300px" style="position:relative;" >
<tr><td valign = "top" width = "180" id="slidercont"><img src = "images/1.jpg" width = "180" height="745" alt="" class="active"><img src = "images/4.jpg" width = "180" height="745" alt=""></td>
<td width = "700"><center><img src = "images/back.jpg"></center>

<center><div id = "result_box">
<center><table><tr><td id = "latdir_header"><h4><center><font color = "white">Static Lateral Stability</font></center></h4></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</td><td id= "latdir_header"><h4><center><font color = "white">Static Directional Stability</font></center></h4></td></tr>
<tr><td><br><center><img src = "images/wrong.png" width = "240"></center></td><td></td><td><br><center><img src = "images/wrong.png" width = "240"></center>
</td></tr>

<tr><td><h4><font style ="text-decoration:blink;color:#FF0000; font-size:18px;"><center>The aircraft is statically unstable <br>in the <u>Lateral</u> axis.</center></font></h4></td><td></td><td><h4>
<font style ="text-decoration:blink; color:#FF0000; font-size:18px;"><center>The aircraft is statically unstable <br>in the <u>Directional</u> axis.</center></font></h4></td></tr>
</table></center>
<br><br><br>

<center><table id ="longresult"><tr><td><font color = "white"> Lateral Stability Coefficient :>></font></td><td><input id = "result_lat" type = "text" readonly = "readonly" value="<?php echo $_SESSION['latstab']; ?>"></td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id = "result_lat" type = "text" readonly = "readonly" value="<?php echo $_SESSION['dirstab']; ?>"></td><td><font color = "white"><<: Directional Stability Coefficient</font></td></tr></table></center>
</div></center>


</td>
<td valign = "top" id="slidercont"><img src = "images/3.jpg" width = "180" height="745" alt="" class="active"><img src = "images/2.jpg" width = "180" height="745" alt=""></td>
</tr>
</table></center>
</body>
</html>

<?php }   ?>


<?php  // case 7 (critical, wrong)

if (($_SESSION['latResult'] == "The aircraft has marginal static stability in the Lateral axis") && 
($_SESSION['dirResult'] == "The aircraft is statically unstable in the Directional axis")) { ?>

<center><table id = "middlepiece" border = "0" width = "1300px" style="position:relative;" >
<tr><td valign = "top" width = "180" id="slidercont"><img src = "images/1.jpg" width = "180" height="745" alt="" class="active"><img src = "images/4.jpg" width = "180" height="745" alt=""></td>
<td width = "700"><center><img src = "images/back.jpg"></center>

<center><div id = "result_box">
<center><table><tr><td id = "latdir_header"><h4><center><font color = "white">Static Lateral Stability</font></center></h4></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</td><td id= "latdir_header"><h4><center><font color = "white">Static Directional Stability</font></center></h4></td></tr>
<tr><td><br><center><img src = "images/critical.png" width = "240"></center></td><td></td><td><br><center><img src = "images/wrong.png" width = "240">
</center></td></tr>

<tr><td><h4><font style ="text-decoration:blink;color:#F90; font-size:18px;"><center>The aircraft has marginal static stability <br>in the <u>Lateral</u> axis.</center></font></h4></td><td></td><td><h4>
<font style ="text-decoration:blink; color:#FF0000; font-size:18px;"><center>The aircraft is statically unstable <br>in the <u>Directional</u> axis.</center></font></h4></td></tr>
</table></center>
<br><br><br>

<center><table id ="longresult"><tr><td><font color = "white"> Lateral Stability Coefficient :>></font></td><td><input id = "result_lat" type = "text" readonly = "readonly" value="<?php echo $_SESSION['latstab']; ?>"></td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id = "result_lat" type = "text" readonly = "readonly" value="<?php echo $_SESSION['dirstab']; ?>"></td><td><font color = "white"><<: Directional Stability Coefficient</font></td></tr></table></center>
</div></center>


</td>
<td valign = "top" id="slidercont"><img src = "images/3.jpg" width = "180" height="745" alt="" class="active"><img src = "images/2.jpg" width = "180" height="745" alt=""></td>
</tr>
</table></center>
</body>
</html>

<?php }   ?>

<?php  // case 8 (critical, correct)

if (($_SESSION['latResult'] == "The aircraft has marginal static stability in the Lateral axis") && 
($_SESSION['dirResult'] == "The aircraft is statically stable in the Directional axis")) { ?>

<center><table id = "middlepiece" border = "0" width = "1300px" style="position:relative;" >
<tr><td valign = "top" width = "180" id="slidercont"><img src = "images/1.jpg" width = "180" height="745" alt="" class="active"><img src = "images/4.jpg" width = "180" height="745" alt=""></td>
<td width = "700"><center><img src = "images/back.jpg"></center>

<center><div id = "result_box">
<center><table><tr><td id = "latdir_header"><h4><center><font color = "white">Static Lateral Stability</font></center></h4></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</td><td id= "latdir_header"><h4><center><font color = "white">Static Directional Stability</font></center></h4></td></tr>
<tr><td><br><center><img src = "images/critical.png" width = "240"></center></td><td></td><td><br><center><img src = "images/correct.jpg" width = "240">
</center></td></tr>

<tr><td><h4><font style ="text-decoration:blink;color:#F90; font-size:18px;"><center>The aircraft has marginal static stability <br>in the <u>Lateral</u> axis.</center></font></h4></td><td></td><td><h4>
<font style ="text-decoration:blink; color:#050; font-size:18px;"><center>The aircraft is statically stable <br>in the <u>Directional</u> axis.</center></font></h4></td></tr>
</table></center>
<br><br><br>

<center><table id ="longresult"><tr><td><font color = "white"> Lateral Stability Coefficient :>></font></td><td><input id = "result_lat" type = "text" readonly = "readonly" value="<?php echo $_SESSION['latstab']; ?>"></td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id = "result_lat" type = "text" readonly = "readonly" value="<?php echo $_SESSION['dirstab']; ?>"></td><td><font color = "white"><<: Directional Stability Coefficient</font></td></tr></table></center>
</div></center>


</td>
<td valign = "top" id="slidercont"><img src = "images/3.jpg" width = "180" height="745" alt="" class="active"><img src = "images/2.jpg" width = "180" height="745" alt=""></td>
</tr>
</table></center>
</body>
</html>

<?php }   ?>


<?php  // case 9 (critical, critical)

if (($_SESSION['latResult'] == "The aircraft has marginal static stability in the Lateral axis") && 
($_SESSION['dirResult'] == "The aircraft has marginal static stability in the Directional axis")) { ?>

<center><table id = "middlepiece" border = "0" width = "1300px" style="position:relative; vertical-align:top;">
<tr><td valign = "top" width = "180" id="slidercont"><img src = "images/1.jpg" width = "180" height="745" alt="" class="active"><img src = "images/4.jpg" width = "180" height="745" alt=""></td>
<td width = "700"><center><img src = "images/back.jpg"></center>

<center><div id = "result_box">
<center><table><tr><td id = "latdir_header"><h4><center><font color = "white">Static Lateral Stability</font></center></h4></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</td><td id= "latdir_header"><h4><center><font color = "white">Static Directional Stability</font></center></h4></td></tr>
<tr><td><br><center><img src = "images/critical.png" width = "240"></center></td><td></td><td><br><center><img src = "images/critical.png" width = "240">
</center></td></tr>

<tr><td><h4><font style ="text-decoration:blink;color:#F90; font-size:18px;"><center>The aircraft has marginal static stability <br>in the <u>Lateral</u> axis.</center></font></h4></td><td></td><td><h4>
<font style ="text-decoration:blink; color:#F90; font-size:18px;"><center>The aircraft has marginal static stability <br>in the <u>Directional</u> axis.</center></font></h4></td></tr>
</table></center>
<br><br><br>

<center><table id ="longresult"><tr><td><font color = "white"> Lateral Stability Coefficient :>></font></td><td><input id = "result_lat" type = "text" readonly = "readonly" value="<?php echo $_SESSION['latstab']; ?>"></td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id = "result_lat" type = "text" readonly = "readonly" value="<?php echo $_SESSION['dirstab']; ?>"></td><td><font color = "white"><<: Directional Stability Coefficient</font></td></tr></table></center>
</div></center>


</td>
<td valign = "top" id="slidercont"><img src = "images/3.jpg" width = "180" height="745" alt="" class="active"><img src = "images/2.jpg" width = "180" height="745" alt=""></td>
</tr>
</table></center>
</body>
</html>

<?php }   ?>

<?php
      session_destroy();
	  
?>

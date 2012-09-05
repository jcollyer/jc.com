<?php
  include "browser.php"; 
  $user_info = new HelperUserInfo();
  $user = $user_info->getUserInfo();
  extract($user);
// echo $browser_version;
 //echo $browser;
  
?>

<?php
    $overload = false;

    if($browser=='MSIE'){
        if($browser_version < 8){
            $overload='ie7.';
        } //elseif ($browser_version < 9){
          //  $overload='ie8.';
      //  }    
    }
if($overload){
//	Header( "Location: ".$visitpage);
	 header( 'Location: '.$overload.php);
   // <link href="<?=$overload.php">
  } 
?><!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>JC.com Welcome!</title>
<link href='http://fonts.googleapis.com/css?family=Just+Me+Again+Down+Here' rel='stylesheet' type='text/css'>

<link rel="jeremycollyer.com icon" href="img/url-icon.ico" />
<link href="css/main.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/lightbox.css" media="screen" />


<script src="js/jquery-1.7.1.min.js"></script>
<script src="js/modernizr.js"></script>
<script src="js/animate-color.js"></script>
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->



</head>
<body>
	<div id="navigation">
		<nav>
			<ul id="topnav">	
				<li id="link10"><a href="#t10" title="home" class="current" ><p>home</p></a></li>
				<li id="link20"><a href="#t20" title="work"><p>work</p></a></li>
				<li id="link30"><a href="#t30" title="about"><p>about</p></a></li>
			</ul>
		</nav>				
	</div>
	<header>
				<!--TAB-1-->
				<div id="t10" title="home">
					<div id="header_icon">	
						<div id="icon1" class="icon_link" rel="1" ><img src="img/flip11.png" class="icon_image_logo" rel="1" /><a href="http://www.todaysfuneralhome.com" ><img src="img/goto-button.png" class="icon_link_button" rel="1" /></a>1</div>
						<div id="icon2" class="icon_link" rel="2" ><img src="img/flip22.png" class="icon_image_logo" rel="2" /><a href="http://jeremycollyer.com/template4/"><img src="img/goto-button.png" class="icon_link_button" rel="2" /></a>2</div>
						<div id="icon3" class="icon_link" rel="3" ><img src="img/flip33.png" class="icon_image_logo" rel="3"/><a href="http://jeremycollyer.com/scaphon/"><img src="img/goto-button.png" class="icon_link_button" rel="3" /></a>3</div>
						<div id="icon4" class="icon_link" rel="4" ><img src="img/flip44.png" class="icon_image_logo" rel="4" /><a href="http://jeremycollyer.com/seahawaiitours/"><img src="img/goto-button.png" class="icon_link_button" rel="4" /></a>4</div>
						<div id="icon5" class="icon_link" rel="5" ><img src="img/flip55.png" class="icon_image_logo" rel="5" /><a href="http://jeremycollyer.com/template2/"><img src="img/goto-button.png" class="icon_link_button" rel="5" /></a>5</div>
						<div id="icon6" class="icon_link" rel="6" ><img src="img/flip66.png" class="icon_image_logo" rel="6" /><a href="http://www.hughesfh.com"><img src="img/goto-button.png" class="icon_link_button" rel="6" /></a>6</div>
					</div>
					<div id="header_show_image">
						<img class="show_first" src="img/logo.png" />
					</div>
					<div id="header_show_slogen">	
						<h5 class="estrya">Welco<span class="purple">m</span>e to:</h1>
					</div>
				</div>
				
				<!--TAB-3-->
				<div id="t30" title="about">
					<div id="about_container">
						<div id="about_pic">
							<img src="img/jeremy.jpg" />
						</div>	
						<div id="about_info">
							<h1><span class="purple">Hello internet world</span></h1>
							<p>I'm jeremy.  I live in <span class="purple">Los Angeles.</span>  My joy is making the web a better place! so if you need a <span class="purple">new</span> website, or a <span class="purple">revamp</span> of your current site, let me help!  the best way to contact me is through my nifty message box below&darr;thanks!</p> 
						</div>
					</div>
				</div>	
				<!--TAB-2-->
				<div id="t20" title="work">
					<div id="work_thumbs">
						<div class="zitem"><a href="img/work-websites-big.jpg" /><img src="img/work-websites.png" alt="websites" title="" width="175" height="175" /></a>
							<div class="caption">WEBSITES</div>
						</div>
						<div class="zitem"><a href="img/work-logos-big.jpg" /><img src="img/work-logos.png" alt="logos" title="" width="175" height="175" /></a>
							<div class="caption">LOGOS</div>
						</div>
						<div class="zitem"><a href="img/work-banners-big.jpg" /><img src="img/work-banners.png" alt="banners" title="" width="175" height="175" /></a>
							<div class="caption">BANNERS</div>
						</div>
						<div class="zitem"><a href="img/work-icons-big.jpg" /><img src="img/work-icons.png" alt="icons" title="" width="175" height="175" /></a>
							<div class="caption">ICONS</div>
						</div>
					</div>
				</div>	
	</header>

	<div id="fancy"><h6>jeremycollyer.com</h6></div>
	<div id="html5_logo"><h6>jeremycollyer.com</h6></div>
	<section>
		<article>
			<div id="header_article">
				<div id="section_header">
					<p>i'm a web-designer in <span style="color:#A765E5">LA</span>, check out some of my recent work...</p>
				</div>
			</div>	
			<div id="click"><h6>jeremycollyer.com</h6></div>
			<div id="boxes">
				<div id="boxes_left">
					<div id="left_inner">
			    			<ul class="showcase">
								<li id="i1"><a href="img/showcase1.jpg" title="Today's Funeral Home"><img src="img/flip1.png" /><img src="img/flip11.png" class="topflip" /><h2>TFH is a full service online solutions for funeral home directors</h2></a></li>
								<li id="i2"><a href="img/showcase2.jpg" title="Bardel"><img src="img/flip2.png"  /><img src="img/flip22.png" class="topflip" /><h2>Bardel's clean welcoming environment is what sets it apart from the competition</h2></a></li>
								<li id="i3"><a href="img/showcase3.jpg" title="SCAPHON"><img src="img/flip3.png"  /><img src="img/flip33.png" class="topflip" /><h2>SCAPHON is a bright website for a bright group of volunteers!</h2></a></li>
							</ul>
					</div>
				</div>
				<div id="boxes_right">
					<div id="right_inner">
			  			<ul class="showcase">
								<li id="i4"><a href="img/showcase4.jpg" title="Sea Hawaii Tours"><img src="img/flip4.png" /><img src="img/flip44.png" class="topflip" alt="alt" /><h2>Surf-in the web to Hawaii! </h2></a></li>
								<li id="i5"><a href="img/showcase5.jpg" title="Albony"><img src="img/flip5.png" /><img src="img/flip55.png" class="topflip" /><h2>Make the most of your user experience</h2></a></li>
								<li id="i6"><a href="img/showcase6.jpg" title="Hughes"><img src="img/flip6.png" /><img src="img/flip66.png" class="topflip"  /><h2>Clean, friendly, welcoming designs</h2></a></li>
						</ul>
					</div>
				</div>
			</div>
		<div id="page_bar"><h6>jeremycollyer.com</h6></div>
		</article>
	</section>
	<footer>
		<div id="footerpic">
			<div id="footer_columns">
				<div id="left_footer_colomn">
					<div id="form_title">
						<p class="oxygen">feel free to send me a message...</p>
					</div>
					<div id="small_edge">
						<h6>jeremycollyer.com</h6>
					</div>
					<table id="form_table">
						<tr>
							<td>
							<form name="contact"  method="POST" action="sendmail.php">
					  			<label>Full name<span class="color">:</span></label></td>
					  			<td><input class="boxtext" type="text" id="full_name" name="name" size="40" placeholder="Jane Doe" required></td>
					     </tr>
						 <tr>
							<td>
					  			<label>Message<span class="color">:</span></label></td>
					  			<td><textarea class="textbox" type="text" name="comment"></textarea></td>
						</tr>
						<tr>
							<td>
					  			<label>Email<span class="color">:</span></label></td>
					  			<td><input class="boxtext" type="email" id="email_addr" name="email" size="50" placeholder="pumpkin@pie.com" required></td>
						</tr>

						<tr>
							<td></td>
							<td><button class="btn_submit" value="Send Me"></button></form></td>
					 	</tr>
					</table>
				</div>	
				<div id="middle_footer_colomn">
					<h3 class="oxygen">try'n to be social</h3>
					<div class="glow_line"><h6>jeremycollyer.com</h6></div>
					<div id="social_box">
						<div id="facebook">
							<a href="#"><img src="img/facebook_dark.png"></a>
						</div>	
						<div id="linkedin">		
							<a href="#"><img src="img/in_dark.png"></a>
						</div>
						<div id="youtube">
							<a href="#"><img src="img/youtube_dark.png"></a>
						</div>
						<div id="twitter">	
							<a href="#"><img src="img/twitter_dark.png"></a>
						</div>
					</div>
					<script>
						$('#social_box').children().find('a').click(function(){
							//console.log('hi');
							alert('coming soon');
						});
					</script>
				</div>		
				<div id="right_footer_colomn">
						<h3 class="oxygen">tools i use</h3>
						<div class="glow_line"><h6>jeremycollyer.com</h6></div>
					<div class="skills">
						<h2><span class="jellyka">Front-end</span></h2>
							<ul class="skills_list">
								<li title="this helps structure stuff"><a href="#">html5</a></li>
								<li title="this helps display stuff"><a href="#">css3</a></li>
								<li title="this helps animate stuff"><a href="#">javascript/jquery</a></li>
							</ul>
					</div>
					<div class="skills">
						<h2><span class="jellyka">Back-end</span></h2>
							<ul class="skills_list">
								<li title="this helps enable stuff"><a href="#">php</a></li>
								<li title="this helps organize stuff"><a href="#">mysql</a></li>
								<li title="this helps recognition stuff"><a href="#">SEO</a></li>
							</ul>
					</div>		
				</div>
			</div>
			<div id="footer_footer">
			
				<p>&copy;jeremycollyer 2020</p>
			</div>	
		</div>
	</footer>
	<script src="js/start.js"></script>
	<script src="js/hoverIntent.js"></script>
	<script src="js/cufon.js"></script>
	<script src="js/jellyka.font.js"></script>
	<script src="js/estrya.font.js"></script>
	<script src="js/clickNav.js"></script>
	<script src="js/hoverShowcase.js"></script>
	<script src="js/clickShowcase.js"></script>
	<script src="js/hoverNav.js"></script>
	<script src="js/hoverSocial.js"></script>
	<script src="js/hoverZoom.js"></script>
	<script src="js/lightbox.min.js"></script>
	<script src="js/tooltip.min.js"></script>
	<script src="js/clickIconLink.js"></script>
	<script src="js/googleAnalytics.js"></script>
</body>
</html>

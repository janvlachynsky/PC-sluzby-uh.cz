<!DOCTYPE html>
<!--@autor Jan Vlachynský jan.vlachynsky@gmail.com-->
<html>
	<head>
		<title>PC-Služby-Uherské hradiště</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
  		<meta name="author" content="Jan Vlachynský">
  		<meta name="description" content="Servis výpočetní techniky a tvorba webových stránek.">
  		<meta name="keywords" content="PC služby UH,Opravy počítačů,Servis PC, Prodej PC,Uherské Hradiště,Web,Tvorba webu,Internetové stránky">
  		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> <!--zákaz přibližování - mobil-->
  		<link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css"> <!-- www.fontawesome.io - ikony -->
  		<meta name="theme-color" content="#3B6981">  <!-- podbarvení navigace - android -->
  		<link rel="stylesheet" type="text/css" href="css/style.css">
  		<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz' rel='stylesheet' type='text/css' />
  		<script src='https://www.google.com/recaptcha/api.js'></script> <!--reCaptcha-->
  		<script type="text/javascript" src="js/jquery-2.2.3.js"></script>
  		<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.min.js"></script>
  		<script type="text/javascript" src="js/jquery.validate.js"></script>
		<script type="text/javascript" src="js/messages_cs.js"></script>
  		<script type="text/javascript" src="js/script.js"></script>
  		<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyCapA0wAXzHDIabxNkkaC-7EWA-Qo77lcs"></script>
  		<script src="js/google-maps.js"></script>
	</head>
	<body>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facwrebook.net/cs_CZ/sdk.js#xfbml=1&version=v2.8";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	<?php
		if(!isset($_GET['p'])){                                                       //pokud není definovaná proměnná str, nastaví se výchozí Úvod
        $stranka='onas.php';
      }else{
        $stranka=$_GET['p'].'.php';                                                 //získání proměnných z URL
      }
	?>
	<header>
	 <div class="top">
		<span id="top-wide">Kontaktujte nás na telefoním čísle: <a style="color:white;" href="tel:+420775645224">+420 775 645 224</a> | <a href="mailto:info@pc-sluzby-uh.cz">info@pc-sluzby-uh.cz</a></span>
		<div class="top-small">Kontaktujte nás:  <a id="top-phone" class="fa fa-phone" aria-hidden="true" href="tel:+420775645224"></a><a id="top-email" class="fa fa-envelope" aria-hidden="true" href="mailto:info@pc-sluzby-uh.cz"></a>
		</div>
	 </div>
	 <div class="menu">
	 	<div class="logo">
	 		<a href="/">
	 		<strong>
	 			<span class="highlight1">PC</span>-SLUŽBY-UH
	 		</strong>
	 		</a>
	 	</div>
			<nav id="nav">
			 <ul class="active">
				<li><a href="?p=onas" class="menuitem
					<?php if($stranka=='onas.php') echo " aktivni"; ?>
						">O nás</a></li>													<!--zvýraznění aktivní položky v menu-->
				<li><a href="?p=servis" class="menuitem
					<?php if($stranka=='servis.php') echo " aktivni"; ?>
						">Servis</a></li>
				<li><a href="?p=web" class="menuitem
					<?php if($stranka=='web.php') echo " aktivni"; ?>
						">Tvorba webu</a></li>
				<li><a href="?p=sluzby" class="menuitem
					<?php if($stranka=='sluzby.php') echo " aktivni"; ?>
						">Balíčky služeb</a></li>
				<li><a href="?p=kontakt" class="menuitem
					<?php if($stranka=='kontakt.php') echo " aktivni"; ?>
						">Kontakt</a></li>
			 </ul>
				<a class="toggle-nav" href="#">&#9776;</a>				
				<!--<li class="icon"><a href="javascript:void(0);" style="font-size:15px;" onclick="respMenu()">☰</a>-->
			</nav>
	 </div>
	</header>
		<section class="obsah">	
			<?php include($stranka); ?>	
			<div class="grafika">
			</div>
		</section>
	<div class="uparrow" id="uparrow"><a href="#top"><img src="graphics/up-arrow.png" alt="up arrow" width="50" height="50"> </a></div>
	<div id="space-uparrow"><img src="graphics/up-arrow.png" alt="up arrow" width="50" height="50"> </div>
	<footer>	
		<ul>
			<li><a href="?p=onas">O nás</a></li>	
			<li><a href="?p=servis">Servis</a></li>
			<li><a href="?p=web">Tvorba webu</a></li>
			<li><a href="?p=sluzby">Balíčky služeb</a></li>
			<li><a href="?p=kontakt">Kontakt</a></li>
		</ul>
		<hr class="wide">
		<hr class="cistic">
		<p style="text-align:center;margin: 5px;">&#0169 Copyright <a href="?p=web">PC-služby-UH</a> 2016 | Web & design</p>	
	</footer>
</body>




<!DOCTYPE html>
<html>
	<head>
		<title>Don't forget the lyrics</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<!-- CSS AIG -->
		<link href="<?php echo base_url();?>/assets/css/perso.css" rel="stylesheet" media="screen">
		<link href="<?php echo base_url();?>/assets/css/normalize.css" rel="stylesheet" media="screen">
		<link href="<?php echo base_url();?>/assets/css/skeleton.css" rel="stylesheet" media="screen">
		<link href="<?php echo base_url();?>/assets/css/ui-lightness/jquery-ui.css" rel="stylesheet" media="screen">
		<link href="<?php echo base_url();?>/assets/css/ui-lightness/jquery-ui.theme.css" rel="stylesheet" media="screen">
		<link href="<?php echo base_url();?>/assets/css/ui-lightness/jquery-ui.structure.css" rel="stylesheet" media="screen">
		
		<!-- FONT –––––––––––––––––––––––––––––––––––––––––––––––––– -->
		<link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

		
		<link rel="icon" href="<?php echo base_url();?>/assets/images/favicon.png" />
		
		<script src="<?php echo base_url();?>/assets/js/jquery-1.11.1.js"></script>
		<script src="<?php echo base_url();?>/assets/js/jquery-ui.js"></script>
		<script src="<?php echo base_url();?>/assets/js/responsiveslides.min.js"></script>
		
		<!--PLAYER-->
		<script src="<?php echo base_url();?>assets/audio/build/jquery.js"></script>	
		<script src="<?php echo base_url();?>assets/audio/build/mediaelement-and-player.min.js"></script>
		<link rel="stylesheet" href="<?php echo base_url();?>assets/audio/build/mediaelementplayer.min.css" />
	
		<link rel="stylesheet" href="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
		<script src="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>
	</head>
	<body>
		<div id="site">
			<header id="header">
				<div id="logo_partenaire">
					<div id="logo"><a href="<?php echo base_url(); ?>"><img width="350" alt="logo" src="<?php echo base_url();?>/assets/images/logo.png" /></a></div>
				</div>
			</header>
			<nav id="menu_bg">
				<div style="margin:0px auto" id="menu">
					<?php require 'application/views/menu.php'; ?>
				</div>
			</nav>
			<div id="main">
				<?php echo $output; ?>
			</div>
			<footer id="footer">
				<div id="tous_droits_reserves" class="container">
					<div class="twelve columns" style="margin: 10px 0 0 0;">
						TOUS DROITS RESERVES 2015 © LTMIYE<br/>
						DEVELOPPEMENT ET DESIGN PAR LTMIYE
					</div>
				</div>
			</footer>
		</div>
	</body>
</html>
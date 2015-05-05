<!DOCTYPE html>
<html>
	<head>
		<title>Don't forget the lyrics</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<!-- CSS AIG -->
		<link href="<?php echo base_url();?>/assets/css/perso.css" rel="stylesheet" media="screen">
		<link href="<?php echo base_url();?>/assets/css/ui-lightness/jquery-ui.css" rel="stylesheet" media="screen">
		<link href="<?php echo base_url();?>/assets/css/ui-lightness/jquery-ui.theme.css" rel="stylesheet" media="screen">
		<link href="<?php echo base_url();?>/assets/css/ui-lightness/jquery-ui.structure.css" rel="stylesheet" media="screen">
		
		<link rel="icon" href="<?php echo base_url();?>/assets/images/favicon.png" />
		
		<script src="<?php echo base_url();?>/assets/js/jquery-1.11.1.js"></script>
		<script src="<?php echo base_url();?>/assets/js/jquery-ui.js"></script>
		<script src="<?php echo base_url();?>/assets/js/menu_produits.js"></script>
		<script src="<?php echo base_url();?>/assets/js/responsiveslides.min.js"></script>
	</head>
	<body>
		<div id="site">
			<header id="header">
				<div id="logo_partenaire">
					<div id="logo"><a href="<?php echo base_url(); ?>"><img alt="logo_aig" src="<?php echo base_url();?>/assets/images/logo_aig.png" /></a></div>
				</div>
			</header>
			<nav id="menu_bg">
				<div id="menu">
					<a href="<?php echo site_url('home'); ?>">
						<div class="menu_bouton menu_accueil">ACCUEIL</div>
					</a>
					<a href="<?php echo site_url('player'); ?>">
						<div class="menu_bouton menu_accueil">PLAYER</div>
					</a>
				</div>
			</nav>
			<div id="main">
				<?php echo $output; ?>
			</div>
			<footer id="footer">
				<div id="agence_logo_navigation_contact_bg">
					<div id="agence_logo_navigation_contact">
					</div>
				</div>
				<div id="tous_droits_aig_bg">
					<div id="tous_droits_aig">
						TOUS DROITS RESERVES 2015 © OSEF<br/>
						DEVELOPPEMENT ET DESIGN PAR OSEF
					</div>
				</div>
			</footer>
		</div>
	</body>
</html>
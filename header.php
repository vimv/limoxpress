<!DOCTYPE html>
<html lang="en">
	<head>    
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>

		<!-- Normalize -->
    	<link href="<?php echo get_bloginfo('template_url').'/css/normalize.css'; ?>" rel="stylesheet">

		<!-- Bootstrap -->
    	<link href="<?php echo get_bloginfo('template_url').'/css/bootstrap.min.css'; ?>" rel="stylesheet">

		<!-- Theme Styles -->
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

    	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->		
		
		<script>var homeurl = "<?php bloginfo('home'); ?>";</script>

		<?php wp_head(); ?>
	</head>
	<body>

		<div class="container-fluid">
	
			<div class="row hidden-xs sub-header">		<!-- This div can be hidden with hidden-xs class in small devices -->
				<div class="col-xs-12 col-sm-6 col-md-6">
					<small>Limo Express 725 Main Street Hackensack, NJ 07601</small>
				</div>
		  		<div class="col-xs-12 col-sm-6 col-md-6">
		  			<p class="text-right">800.221.2345  201.343.3488</p>
		  			<ul class="list-inline cards-header">
						<li class="ocard"></li>
						<li class="mcard"></li>
						<li class="vcard"></li>
					</ul>
		  		</div>
			</div>
			<div class="row menu-header">
				<div class="col-xs-12 col-sm-4">
					<img src="<?php echo get_bloginfo('template_url') ?>/img/logo.png" class="img-responsive logo" />
				</div>
		  		<div class="col-xs-12 col-sm-8">
		  			<?php
		  				wp_nav_menu( array(
		  					'menu' => 'Main Navigation',
		  					'container' => 'ul',
					        'container_class' => 'collapse navbar-collapse navbar-ex1-collapse',
		  					'menu_class' =>'list-inline navbar-right') //nav navbar-nav
		  				);
		  			?>

				</div>
			</div>
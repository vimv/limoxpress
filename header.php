<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '', true, 'right' ); ?></title>

	<?php wp_head(); ?>
	
	<?php
		//Add theme options
		global $redux_demo;
	?>
	
	<script>var homeurl = "<?php bloginfo('home'); ?>";</script>
</head>
<body>
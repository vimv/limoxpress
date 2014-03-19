<?php get_header(); ?>

	<div class="row slider-header">
		<div class="col-xs-12">
			<?php putRevSlider("slider-home"); ?>
		</div>
	</div>


	<div class="container">

		<div class="row columns-servs">
			<div class="col-xs-12 col-md-4">
				<img src="<?php echo get_bloginfo('template_url') ?>/img/col1.jpg" class="img-responsive center-block" /><br>
				<h4 class="center-block">Our Fleet</h4><br>
				<p class="text-justify center-block text-servs">Mis vim an, eos veri perpetua efficiendi ei. Sed et i perpetua efficiendi ei. Sed et tri ipsum dolor sit amet, magna interpretaris vim anSed et tritani corpora splendide, veri phaedrum his cu. Viris graeci ei has, vim id hinc posidonium, eos.
				<br><br>Nodi ei. Sed et i perpetua efficiendi ei. Sed et tri ipsum dolor sit amet, magna interpretaris vim an, eos veri perpetua efficiendi ei. veri perpetua efficiendi ei. Sed et tritani corpo eririndi ei. Sed et tri ipsum dol dide, veri phaedrum his cu. </p><br>
				<button type="button" class="btn btn-custom">View Our Fleet</button>
			</div>
			<div class="col-xs-12 col-md-4">
				<img src="<?php echo get_bloginfo('template_url') ?>/img/col2.jpg" class="img-responsive center-block" /><br>
				<h4 class="center-block">Impeccable Service</h4><br>
				<p class="text-justify center-block text-servs">Mis vim an, eos veri perpetua efficiendi ei. Sed et i perpetua efficiendi ei. Sed et tri ipsum dolor sit amet, magna interpretaris vim anSed et tritani corpora splendide, veri phaedrum his cu. Viris graeci ei has, vim id hinc posidonium, eos.
				<br><br>Nodi ei. Sed et i perpetua efficiendi ei. Sed et tri ipsum dolor sit amet, magna interpretaris vim an, eos veri perpetua efficiendi ei. veri perpetua efficiendi ei. Sed et tritani corpo eririndi ei. Sed et tri ipsum dol dide, veri phaedrum his cu. </p><br>
				<button type="button" class="btn btn-custom">Choose a Service</button>
			</div>
			<div class="col-xs-12 col-md-4">
				<img src="<?php echo get_bloginfo('template_url') ?>/img/col3.jpg" class="img-responsive center-block" /><br>
				<h4 class="center-block">Current Promotions</h4><br>
				<p class="text-justify center-block text-servs">Mis vim an, eos veri perpetua efficiendi ei. Sed et i perpetua efficiendi ei. Sed et tri ipsum dolor sit amet, magna interpretaris vim anSed et tritani corpora splendide, veri phaedrum his cu. Viris graeci ei has, vim id hinc posidonium, eos.
				<br><br>Nodi ei. Sed et i perpetua efficiendi ei. Sed et tri ipsum dolor sit amet, magna interpretaris vim an, eos veri perpetua efficiendi ei. veri perpetua efficiendi ei. Sed et tritani corpo eririndi ei. Sed et tri ipsum dol dide, veri phaedrum his cu. </p><br>
				<button type="button" class="btn btn-custom">Book Promotion</button>
			</div>
		</div>

		<div class="row news">
			<div class="col-xs-12 col-md-8">
				<h4>Proudly Serving Bergen County, NJ and Metro NYC for Over 30 Years</h4><br>
				<p class="text-justify text-servs">For over thirty years we have been considered the leaders as well as the innovators in the limousine service industry fostering long term relationships with our clients. Utilizing the latest in cutting edge technology no other Bergen County NJ Limousine Service can compare with our consistent level of on time performance and dependability. Our large meticulously maintained fleet includes the latest model Limos, Limousines, Sedans, Executive Vans and our popular SUV's. <br><br> Lorem ipsum dolor sit amet, magna interpretaris vim an, eos veri perpetua efficiendi ei. Sed et tritani corpora splendide, veri phaedrum his cu. Viris graeci ei has, vim id hinc posidonium, eos alterum nusquam posidonium eu. Aperiri accusam an sea. Mis vim an, eos veri perpetua efficiendi ei. Sed et i perpetua efficiendi ei. Sed et tri ipsum dolor sit amet, magna interpretaris vim an, eos veri perpetua . Nodi ei. Sed et i perpetua efficiendi ei. Sum dolor sit amet, magna interpretaris vim an.</p><br><br>
			</div>
			<div class="col-xs-12 col-md-4 news-sidebar">
				<?php if ( is_active_sidebar( 'right-sidebar' ) ) : ?>
					<?php dynamic_sidebar( 'Right Page Sidebar' ); ?>
				<?php else : ?>
				<h4>News</h4><br>
				<h5><strong>Super Bowl Boulevard Is In High Gear</strong></h5><br>
				<p class="text-justify text-news">Take a photo with the Vince Lombardi Trophy!<br>Receive FREE autographs from NFL players!<br>Kick a field goal through NFL uprights! Visit the broadcast sets of NFL Network, ESPN and FOX! Ride the 60′ foot toboggan ($5 per ride donated to MillionTreesNYC)! Visit NFL sponsor displays and receive FREE giveaways! ... <strong>READ MORE</strong></p><br>
				<h5><strong>Our Newest Edition - Lincoln MKZ Limousine</strong></h5><br>
				<p>For decades, the Lincoln Town Car se	rved as the staple limousine. Lincoln has discontinued the Town Car Series, but has put in it’s place the Lincoln MKZ and Lincoln MKX Crossover... <strong>READ MORE</strong></p><br>
				<?php endif; ?>
			</div>
		</div>

		<div class="row logos-home">
			<div class="col-xs-6 col-md-2">
				<img src="<?php echo get_bloginfo('template_url') ?>/img/logohome1.png" class="img-responsive" />
			</div>
			<div class="col-xs-6 col-md-2">
				<img src="<?php echo get_bloginfo('template_url') ?>/img/logohome2.png" class="img-responsive" />
			</div>
			<div class="col-xs-6 col-md-2">
				<img src="<?php echo get_bloginfo('template_url') ?>/img/logohome3.png" class="img-responsive" />
			</div>
			<div class="col-xs-6 col-md-2">
				<img src="<?php echo get_bloginfo('template_url') ?>/img/logohome4.png" class="img-responsive" />
			</div>
			<div class="col-xs-6 col-md-2"> <!-- col-xs-pull-6 col-md-push-0 -->
				<img src="<?php echo get_bloginfo('template_url') ?>/img/logohome5.png" class="img-responsive" />
			</div>
		</div>

		<hr class="divider-secction">


	
	</div>

<?php get_footer(); ?>
				<hr class="divider-secction">

				<div class="row menu-footer">
					<div class="col-xs-12 col-sm-4 col-md-3 center-block">
						<a href="<?php bloginfo('home') ?>">
							<img src="<?php echo get_bloginfo('template_url') ?>/img/logo-small.png" class="img-responsive logo" />
						</a>
						<br>
						<?php if ( is_active_sidebar( 'footer-left-sidebar' ) ) : ?>
							<?php dynamic_sidebar( 'Footer Left Sidebar' ); ?>
						<?php else : ?>
							<p>
								<strong>Limo Express</strong><br>
								725 Main Street<br>
								Hackensack, NJ 07601
							</p><br>
							<p>
								<strong>Limo Express</strong><br>
								725 Main Street<br>
								Hackensack, NJ 07601
							</p><br>
							<p>
								Toll Free <span class="telnumber">800.221.2345</span><br>
								Local <span class="telnumber">201.343.3488</span>
							</p><br>
							<h5>CONNECT WITH US</h5>
							<ul class="social-btns list-inline">
								<li class="face"></li>
								<li class="twit"></li>
								<li class="plus"></li>
								<li class="yout"></li>
							</ul>
						<?php endif; ?>
					</div>
					<div class="col-xs-12 col-sm-4 col-md-3 center-block">
						<?php if ( is_active_sidebar( 'footer-middle-sidebar' ) ) ?>
							<?php dynamic_sidebar( 'Footer Middle Sidebar' ); ?>
					</div>
					<div class="col-xs-12 col-sm-4 col-md-3 center-block">
						<?php if ( is_active_sidebar( 'footer-right-sidebar' ) ) ?>
							<?php dynamic_sidebar( 'Footer Right Sidebar' ); ?>
					</div>
					<div class="col-xs-12 col-sm-4 col-md-3">
					</div>

					<div class="hidden-xs hidden-sm pull-right bg-footer">
						<img src="<?php echo get_bloginfo('template_url') ?>/img/bgfooter.png" class="img-responsive img-footer" />
					</div>
				</div>

			</div> <!-- Ends .container div -->

			

		</div> <!-- Ends .container-fluid div -->
	
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    	<!-- Include all compiled plugins (below), or include individual files as needed -->
   		<script src="<?php echo get_bloginfo('template_url').'/js/bootstrap.min.js'; ?>"></script>
		<?php wp_footer(); ?>
	</body>
</html>
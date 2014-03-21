<?php get_header(); ?>

	<div class="container">

		<div class="row">
			<div class="col-xs-12 col-sm-8 col-md-9">
				<?php if (have_posts()) : while (have_posts()) : the_post();?>
					<h1 class="post-title"><?php the_title(); ?></h1>
					<div class="post-content">
						<?php the_content(); ?>
					</div>
				<?php endwhile; endif; ?>
			 </div>
			 <div class="col-xs-12 col-sm-4 col-md-3">
			 	<?php if ( is_active_sidebar( 'post-sidebar' ) ) ?>
					<?php dynamic_sidebar( 'Post Sidebar' ); ?>
			 </div>
		</div>

	</div>

<?php get_footer(); ?>
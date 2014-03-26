<?php get_header(); ?>

	<div class="container">

		<div class="row">

		 	<?php if ( is_active_sidebar( 'post-sidebar' ) ): ?>
		 		<div class="col-xs-12 col-sm-8 col-md-9">
					<?php if (have_posts()) : while (have_posts()) : the_post();?>
						<h1 class="post-title"><?php the_title(); ?></h1>
						<div class="post-content">
							<?php the_content(); ?>
						</div>
					<?php endwhile; endif; ?>
				</div>
		 		<div class="col-xs-12 col-sm-4 col-md-3 news-sidebar">
					<?php dynamic_sidebar( 'Post Sidebar' ); ?>
		 		</div>
		 	<?php else : ?>
		 		<div class="col-xs-12 col-sm-12 col-md-12">
					<?php if (have_posts()) : while (have_posts()) : the_post();?>
						<h1 class="post-title"><?php the_title(); ?></h1>
						<div class="post-content">
							<?php the_content(); ?>
						</div>
					<?php endwhile; endif; ?>
				</div>
		 	<?php endif; ?>

		</div>

	<!--</div>-->

<?php get_footer(); ?>
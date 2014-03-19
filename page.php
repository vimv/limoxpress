<?php get_header(); ?>

	<div class="container">

		<div class="row">
			 <?php if (have_posts()) : while (have_posts()) : the_post();?>
					<h1 class="post-title"><?php the_title(); ?></h1>
					<div class="post-content">
						<?php the_content(); ?>
					</div>
			 <?php endwhile; endif; ?>
		</div>

	</div>

<?php get_footer(); ?>
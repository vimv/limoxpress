<?php
/**
 * Flexible Posts Widget: Default widget template
 */

// Block direct requests
if ( !defined('ABSPATH') )
	die('-1');

echo $before_widget;

if ( !empty($title) )
	echo $before_title . $title . $after_title;

if( $flexible_posts->have_posts() ):
?>
	
	<?php while( $flexible_posts->have_posts() ) : $flexible_posts->the_post(); global $post; ?>
			<br>
			<a id="post-<?php the_ID(); ?>" <?php post_class(); ?> href="<?php echo the_permalink(); ?>">
				<?php
					if( $thumbnail == true ) {
						// If the post has a feature image, show it
						if( has_post_thumbnail() ) {
							the_post_thumbnail( $thumbsize );
						// Else if the post has a mime type that starts with "image/" then show the image directly.
						} elseif( 'image/' == substr( $post->post_mime_type, 0, 6 ) ) {
							echo wp_get_attachment_image( $post->ID, $thumbsize );
						}
					}
				?>
				<h5 class="title"><strong><?php the_title(); ?></strong></h5><br>
			</a>
			<p class="text-justify text-news"><?php echo get_the_excerpt(); ?> ... <a href="<?php echo get_permalink(); ?>"><strong>READ MORE</strong></a></p>
			
	<?php endwhile; ?>
	<!-- .dpe-flexible-posts -->
<?php else: // We have no posts ?>
	<div class="dpe-flexible-posts no-posts">
		<br><p class="text-justify text-news"><?php _e( 'No posts found.', 'flexible-posts-widget' ); ?></p>
	</div>
<?php	
endif; // End have_posts()
	
echo $after_widget;

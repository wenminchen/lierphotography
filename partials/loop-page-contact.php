<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					
		<?php the_content(); ?>
		<?php wp_link_pages(); ?>
							
	</article> <!-- end article -->
	
<?php endwhile; else : ?>
					
	<?php get_template_part( 'partials/content', 'missing' ); ?>

<?php endif; ?>
							
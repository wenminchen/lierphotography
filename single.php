<?php get_header(); ?>
			
	<div id="main" class="site-main">

		<div id="inner-content" class="row">
	
			<div class="large-8 medium-8 columns first">
			
			    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			    	<?php get_template_part( 'partials/loop', 'single' ); ?>
			    					
			    <?php endwhile; else : ?>
			
			   		<?php get_template_part( 'partials/content', 'missing' ); ?>

			    <?php endif; ?>
	
			</div>

			<?php get_sidebar(); ?>

		</div> <!-- end #inner-content -->

	</div> <!-- end #main -->

<?php get_footer(); ?>
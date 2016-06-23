?php get_header(); ?>
			
	<div id="main" class="site-main">
		<h1 class="screen-reader-text">Main Content</h1>
		<div id="inner-content" class="clearfix">				
			<?php get_template_part( 'partials/loop', 'page' ); ?>			
		</div>			    					
	</div> <!-- end #main -->

<?php get_footer(); ?>
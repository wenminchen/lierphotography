<?php get_header(); ?>
			
<div id="main" class="site-main">
	<h1 class="screen-reader-text">Main Content</h1>
	
	<section id="blog">
		<div id="inner-content" class="row clearfix">
	    	<div class="medium-8 small-12 columns clearfix">
	    		<h1 class="blog-h1">Wanderlust... </h1>
				<p class="blog-tagline">Musings on photography, travel, and sustainable development</p>
		
		    	<?php get_template_part( 'partials/loop', 'archive' ); ?>
	    	</div> <!-- end #main -->

	    	<div class="hide-for-small-only">
	    		<?php get_sidebar(); ?>
	    	</div>	    	
	    </div> <!-- end #inner-content -->
	    
	</section> <!-- end #blog -->

</div> <!-- end #main -->

<?php get_footer(); ?>
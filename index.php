<?php get_header(); ?>
			
<div id="content">

	<h1 class="hiddenHeader">Main Content</h1>

	<div id="inner-content" class="row clearfix">

		<h1>Wanderlust<br />
		<span class="blog-tagline">Musings on photography, travel, and sustainable development.</span></h1>

	    <div id="main" class="medium-8 columns clearfix" role="main">
		
		    <?php get_template_part( 'partials/loop', 'archive' ); ?>

	    </div> <!-- end #main -->

	    <div class="hide-for-small-only">
	    	<?php get_sidebar(); ?>
	    </div>
	    
	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>
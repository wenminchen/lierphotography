<?php
/*
Template Name: Portfolio
*/
?>

<?php get_header(); ?>
			
<div id="main" class="site-main">
	<h1 class="screen-reader-text">Portfolio Page</h1>
	<section id= "portfolio">
		<div id="inner-content gallery" class="clearfix">			    		
		    <?php get_template_part( 'partials/loop', 'page-portfolio' ); ?>
		</div>
	</section><!-- end #portfolio-->	    					
</div> <!-- end #main -->

<?php get_footer(); ?>

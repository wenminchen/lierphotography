<?php
/*
Template Name: Portfolio
*/
?>

<?php get_header(); ?>
			
<div id="content">

	<div id="inner-content" class="row clearfix">

	    <div id="main" class="large-12 medium-12 columns" role="main">				    
		
		    <?php get_template_part( 'partials/loop', 'portfolio' ); ?>
		    					
		</div> <!-- end #main -->
	    
	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>

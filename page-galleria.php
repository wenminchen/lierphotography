<?php
/*
Template Name: gallery page
*/
?>

<?php get_header(); ?>
			
<div id="content">
	<h1 class="screen-reader-text">Main Content</h1>

	<?php get_template_part( 'partials/loop', 'page-galleria' ); ?>
	
</div> <!-- end #content -->

<?php get_footer(); ?>